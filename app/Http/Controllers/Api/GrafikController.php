<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;

class GrafikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function getAgama()
    {
        // $user = User::all();
        $islam = count(User::where('agama', '=', 'Islam')->get());
        $kristen = count(User::where('agama', '=', 'Kristen')->get());
        $katolik = count(User::where('agama', '=', 'Katolik')->get());
        $hindu = count(User::where('agama', '=', 'Hindu')->get());
        $budha = count(User::where('agama', '=', 'Budha')->get());

        $sum = $islam + $kristen + $katolik + $hindu + $budha;
        $islam = $islam / $sum * 100;
        $kristen = $kristen / $sum * 100;
        $katolik = $katolik / $sum * 100;
        $hindu = $hindu / $sum * 100;
        $budha = $budha / $sum * 100;

        return response()->json([
            'islam' => round($islam),
            'kristen' => round($kristen),
            'katolik' => round($katolik),
            'hindu' => round($hindu),
            'budha' => round($budha),
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
