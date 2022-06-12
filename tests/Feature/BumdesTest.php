<?php

namespace Tests\Feature;

use App\Bumdes;
use Tests\TestCase;
use App\BumdesCategory;
use Illuminate\Http\UploadedFile;

class BumdesTest extends TestCase
{
    public function testAdminCanSeeBumdesPage()
    {
        $this->actingAsAdmin();

        $response = $this->get('/bumdes');

        $response->assertStatus(200);
    }

    public function testAdminCanCreateBumdes()
    {
        $this->actingAsAdmin();

        $bumdes = [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'image' => UploadedFile::fake()->image('bumdes.jpg'),
            'bumdes_category_id' => BumdesCategory::create([
                'name' => $this->faker->name,
            ])->id,
        ];

        $response = $this->post('/bumdes', $bumdes);

        unset($bumdes['image']);
        $this->assertDatabaseHas('bumdes', $bumdes);

        $response->assertRedirect('/bumdes');
    }

    public function testAdminCannotCreateBumdesWithInvalidData()
    {
        $this->actingAsAdmin();

        $response = $this->post('/bumdes', [
            'name' => '',
            'phone' => '',
            'image' => '',
            'bumdes_category_id' => '',
        ]);

        $response->assertSessionHasErrors();
    }

    public function testAdminCanSeeBumdesEditPage()
    {
        $this->actingAsAdmin();

        $bumdes = Bumdes::create([
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'image' => UploadedFile::fake()->image('bumdes.jpg'),
            'bumdes_category_id' => BumdesCategory::create([
                'name' => $this->faker->name,
            ])->id,
        ]);

        $response = $this->get('/bumdes/' . $bumdes->id . '/edit');

        $response->assertStatus(200);
    }

    public function testAdminCanUpdateBumdes()
    {
        $this->actingAsAdmin();

        $bumdes = Bumdes::create([
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'image' => UploadedFile::fake()->image('bumdes.jpg'),
            'bumdes_category_id' => BumdesCategory::create([
                'name' => $this->faker->name,
            ])->id,
        ]);

        $bumdesUpdate = [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'image' => UploadedFile::fake()->image('bumdes.jpg'),
            'bumdes_category_id' => BumdesCategory::create([
                'name' => $this->faker->name,
            ])->id,
        ];

        $response = $this->patch('/bumdes/' . $bumdes->id, $bumdesUpdate);

        unset($bumdesUpdate['image']);
        $this->assertDatabaseHas('bumdes', $bumdesUpdate);

        $response->assertRedirect('/bumdes');
    }

    public function testAdminCannotUpdateBumdesWithInvalidData()
    {
        $this->actingAsAdmin();

        $bumdes = Bumdes::create([
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'image' => UploadedFile::fake()->image('bumdes.jpg'),
            'bumdes_category_id' => BumdesCategory::create([
                'name' => $this->faker->name,
            ])->id,
        ]);

        $response = $this->patch('/bumdes/' . $bumdes->id, [
            'name' => '',
            'phone' => '',
            'image' => '',
            'bumdes_category_id' => '',
        ]);

        $response->assertSessionHasErrors();
    }

    public function testAdminCanDeleteBumdes()
    {
        $this->actingAsAdmin();

        $bumdes = Bumdes::create([
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'image' => UploadedFile::fake()->image('bumdes.jpg'),
            'bumdes_category_id' => BumdesCategory::create([
                'name' => $this->faker->name,
            ])->id,
        ]);

        $response = $this->delete('/bumdes/' . $bumdes->id);

        $this->assertDatabaseMissing('bumdes', $bumdes->toArray());

        $response->assertRedirect('/bumdes');
    }
}
