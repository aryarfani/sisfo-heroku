<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // dd(Auth::user()->desa->id);
        $users = User::where('desa_id', Auth::user()->desa->id)->get();

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
            return view('dashboard', ["dataAgama" => 0, "dataGender" => 0, "male" => 0, "female" => 0, "penduduk" => 0, "total" => 0]);
        }
        $Islam = round($Islam / $sum * 100);
        $Kristen = round($Kristen / $sum * 100);
        $Katolik = round($Katolik / $sum * 100);
        $Hindu = round($Hindu / $sum * 100);
        $Budha = round($Budha / $sum * 100);

        $dataAgama = [$Islam, $Kristen, $Katolik, $Hindu, $Budha];

        // get gender data
        $malePure = count(User::where('jenis_kelamin', '=', '1')->where('desa_id', Auth::user()->desa->id)->get());
        $femalePure = count(User::where('jenis_kelamin', '=', '0')->where('desa_id', Auth::user()->desa->id)->get());

        $sum = $malePure + $femalePure;
        $total = round($sum / 2);
        $male = round($malePure / $sum * 100);
        $female = round($femalePure / $sum * 100);

        $dataGender = [$male, $female];

        return view('dashboard', ["dataAgama" => $dataAgama, "dataGender" => $dataGender, "male" => $malePure, "female" => $femalePure, "penduduk" => $sum, "total" => $total]);
    }
}
