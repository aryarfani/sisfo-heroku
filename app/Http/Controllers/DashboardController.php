<?php

namespace App\Http\Controllers;

use App\Home;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
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

        $dataAgama = [$Islam, $Kristen, $Katolik, $Hindu, $Budha];

        $malePure = count(User::where('jenis_kelamin', '=', '1')->get());
        $femalePure = count(User::where('jenis_kelamin', '=', '0')->get());

        $sum = $malePure + $femalePure;
        $male = $malePure / $sum * 100;
        $female = $femalePure / $sum * 100;

        $dataGender = [$male, $female];

        return view('dashboard', ["dataAgama" => $dataAgama, "dataGender" => $dataGender, "male" => $malePure, "female" => $femalePure, "penduduk" => $sum]);
    }
}
