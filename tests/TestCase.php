<?php

namespace Tests;

use App\Desa;
use App\User;
use App\Admin;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase, WithFaker;

    protected function actingAsAdmin()
    {
        $desa = Desa::create(['nama' => 'NamaDesa']);
        $admin = Admin::create([
            'name' => 'New Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'desa_id' => $desa->id,
        ]);

        $this->actingAs($admin);

        return $admin;
    }

    protected function actingAsUser()
    {
        $desa = Desa::create(['nama' => 'NamaDesa']);
        $user = User::create([
            'nik' => '123456789',
            'nama' => $this->faker->name,
            'jenis_kelamin' => $this->faker->randomElement([1, 0]),
            'alamat' => $this->faker->address,
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Budha']),
            'status' => $this->faker->randomElement(['Belum Kawin', 'Kawin', 'Cerai']),
            'nomer_hp' => $this->faker->phoneNumber,
            'pekerjaan' => $this->faker->jobTitle,
            'password' => bcrypt('secret123'),
            'desa_id' => $desa->id,
        ]);

        $token = JWTAuth::fromUser($user);
        $this->withHeader('Authorization', 'Bearer ' . $token)
            ->withHeader('Accept', 'application/json')
            ->actingAs($user, 'user');

        return $user;
    }
}
