<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

class GrafikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function getAgama()
    {
        $users = User::all();

        foreach ($users as $user) {
            if (isset($user->agama)) {
                $agama = $user->agama;
                if (!isset($data[$agama])) {
                    $data[$agama] = 0;
                }
                $data[$agama]++;
            }
        }
        extract($data);

        $sum = $Islam + $Kristen + $Katolik + $Hindu + $Budha;
        $Islam = $Islam / $sum * 100;
        $Kristen = $Kristen / $sum * 100;
        $Katolik = $Katolik / $sum * 100;
        $Hindu = $Hindu / $sum * 100;
        $Budha = $Budha / $sum * 100;

        return response()->json([
            'islam' => round($Islam),
            'kristen' => round($Kristen),
            'katolik' => round($Katolik),
            'hindu' => round($Hindu),
            'budha' => round($Budha),
        ]);
    }

    public function getGender()
    {
        $male = count(User::where('jenis_kelamin', '=', '1')->get());
        $female = count(User::where('jenis_kelamin', '=', '0')->get());

        $sum = $male + $female;
        $male = $male / $sum * 100;
        $female = $female / $sum * 100;

        return response()->json([
            'male' => round($male),
            'female' => round($female),
        ]);
    }
}
