<?php

namespace Tests\Feature\Api;

use App\Desa;
use App\User;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;

class UserAuthTest extends TestCase
{
    public function testUserCanRegister()
    {
        $this->withHeader('Accept', 'application/json');

        $desa = Desa::create(['nama' => 'NamaDesa']);

        $response = $this->post('api/register', [
            'desa_id' => $desa->id,
            'nik' => '123456789',
            'nama' => $this->faker->name,
            'gambar' => UploadedFile::fake()->image('avatar.jpg'),
            'jenis_kelamin' => $this->faker->randomElement([1, 0]),
            'alamat' => $this->faker->address,
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Budha']),
            'status' => $this->faker->randomElement(['Belum Kawin', 'Kawin', 'Cerai']),
            'nomer_hp' => $this->faker->phoneNumber,
            'pekerjaan' => $this->faker->jobTitle,
            'password' => 'secret123',
        ]);

        $this->assertDatabaseHas('users', [
            'nik' => '123456789',
        ]);

        $response->assertStatus(200);
    }

    public function testUserCannotRegisterWithInvalidData()
    {
        $this->withHeader('Accept', 'application/json');

        $response = $this->post('api/register', []);

        $response->assertStatus(422);
    }

    public function testUserCanLogin()
    {
        $this->withHeader('Accept', 'application/json');

        User::create([
            'nik' => '123456789',
            'nama' => $this->faker->name,
            'jenis_kelamin' => $this->faker->randomElement([1, 0]),
            'alamat' => $this->faker->address,
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Budha']),
            'status' => $this->faker->randomElement(['Belum Kawin', 'Kawin', 'Cerai']),
            'nomer_hp' => $this->faker->phoneNumber,
            'pekerjaan' => $this->faker->jobTitle,
            'password' => bcrypt('secret123'),
        ]);

        $response = $this->post('api/login', [
            'nik' => '123456789',
            'password' => 'secret123',
        ]);

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'access_token', 'token_type'
        ]);

        $this->assertAuthenticated('user');
    }

    public function testUserCannotLoginWithInvalidData()
    {
        $this->withHeader('Accept', 'application/json');

        $response = $this->post('api/login', [
            'nik' => '123456789',
            'password' => 'secret123',
        ]);

        $response->assertStatus(401);
    }

    public function testUserCanLogout()
    {
        $this->actingAsUser();

        $this->assertAuthenticated('user');

        $response = $this->get('api/logout');

        $response->assertStatus(200);

        $this->assertGuest('user');
    }
}
