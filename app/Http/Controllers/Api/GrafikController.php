<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
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
        $users = User::where('desa_id', Auth::guard('user')->user()->desa->id)->get();
        // get agama data
        $Islam = 0;
        $Kristen = 0;
        $Katolik = 0;
        $Hindu = 0;
        $Budha = 0;

        $data = [];

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

        if ($sum == 0) {
            return response()->json(["dataAgama" => 0, "dataGender" => 0, "male" => 0, "female" => 0, "penduduk" => 0, "total" => 0]);
        }
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
        $male = count(User::where('jenis_kelamin', '=', '1')->where('desa_id', Auth::guard('user')->user()->desa->id)->get());
        $female = count(User::where('jenis_kelamin', '=', '0')->where('desa_id', Auth::guard('user')->user()->desa->id)->get());

        $sum = $male + $female;

        if ($sum == 0) {
            return response()->json([
                'male' => 0,
                'female' => 0,
            ]);
        }
        $male = $male / $sum * 100;
        $female = $female / $sum * 100;

        return response()->json([
            'male' => round($male),
            'female' => round($female),
        ]);
    }
}
