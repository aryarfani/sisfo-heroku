<?php

namespace Tests\Feature\Api;

use App\Pasar;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;

class PasarTest extends TestCase
{
    public function testGuestCanGetAllIndex()
    {
        $this->withHeader('Accept', 'application/json');

        $response = $this->get('/api/all-pasar');

        $response->assertStatus(200);
    }

    public function testGuestCannotGetIndex()
    {
        $this->withHeader('Accept', 'application/json');

        $response = $this->get('/api/pasar');

        $response->assertStatus(401);
    }

    public function testUserCanGetIndex()
    {
        $this->actingAsUser();

        $response = $this->get('/api/pasar');

        $response->assertStatus(200);
    }

    public function testUserCanCreatePasar()
    {
        $this->actingAsUser();

        $item = [
            'nama' => $this->faker->word,
            'gambar' => UploadedFile::fake()->image('image.jpg'),
            'deskripsi' => $this->faker->text,
            'harga' => $this->faker->randomNumber(5),
            'nomer_hp' => $this->faker->phoneNumber,
        ];
        $response = $this->post('/api/pasar', $item);

        $response->assertStatus(200);

        $this->assertDatabaseHas('pasar', [
            'nama' => $item['nama'],
        ]);
    }

    public function testUserCannotCreatePasarWithInvalidData()
    {
        $this->actingAsUser();

        $response = $this->post('/api/pasar', []);

        $response->assertStatus(422);
    }

    public function testUserCanSeeTheirPasarItem()
    {
        $user = $this->actingAsUser();

        $pasar = Pasar::create([
            'user_id' => $user->id,
            'nama' => 'NamaPasar',
            'gambar' => 'image.jpg',
            'deskripsi' => $this->faker->text,
            'harga' => $this->faker->randomNumber(5),
            'nomer_hp' => $this->faker->phoneNumber,
        ]);

        $response = $this->get('/api/pasar/user');

        $response->assertJsonFragment([
            'nama' => 'NamaPasar',
            'deskripsi' => $pasar->deskripsi,
        ]);

        $response->assertStatus(200);
    }

    public function testUserCanDeletePasarItem()
    {
        $user = $this->actingAsUser();

        $pasar = Pasar::create([
            'user_id' => $user->id,
            'nama' => 'NamaPasar',
            'gambar' => 'image.jpg',
            'deskripsi' => $this->faker->text,
            'harga' => $this->faker->randomNumber(5),
            'nomer_hp' => $this->faker->phoneNumber,
        ]);

        $response = $this->delete("/api/pasar/$pasar->id/delete");

        $response->assertStatus(200);

        $this->assertDatabaseMissing('pasar', [
            'nama' => 'NamaPasar',
        ]);
    }
}
