<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new User([
            'nik' => $row['nik'],
            'nama' => $row['nama'],
            'pekerjaan' => $row['pekerjaan'],
            'agama' => $row['agama'],
            'alamat' => $row['alamat'],
            'nomer_hp' => $row['no_handphone'],
            'status' => $row['status'],
            'password' =>  bcrypt('desa123'),
            'jenis_kelamin' => $row['jenis_kelamin'],
        ]);
    }
}
