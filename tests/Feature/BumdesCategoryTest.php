<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\BumdesCategory;

class BumdesCategoryTest extends TestCase
{
    public function testAdminCanSeeBumdesCategoryPage()
    {
        $this->actingAsAdmin();

        $response = $this->get('/bumdes-kategori');

        $response->assertStatus(200);
    }

    public function testAdminCanCreateBumdesCategory()
    {
        $this->actingAsAdmin();

        $bumdesCategory = [
            'name' => $this->faker->name,
        ];

        $response = $this->post('/bumdes-kategori', $bumdesCategory);

        $this->assertDatabaseHas('bumdes_categories', $bumdesCategory);

        $response->assertRedirect('/bumdes-kategori');
    }

    public function testAdminCannotCreateBumdesCategoryWithInvalidData()
    {
        $this->actingAsAdmin();

        $response = $this->post('/bumdes-kategori', [
            'name' => '',
        ]);

        $response->assertSessionHasErrors();
    }

    public function testAdminCanSeeBumdesCategoryEditPage()
    {
        $this->actingAsAdmin();

        $bumdesCategory = BumdesCategory::create([
            'name' => $this->faker->name,
        ]);

        $response = $this->get('/bumdes-kategori/' . $bumdesCategory->id . '/edit');

        $response->assertStatus(200);
    }

    public function testAdminCanUpdateBumdesCategory()
    {
        $this->actingAsAdmin();

        $bumdesCategory = BumdesCategory::create([
            'name' => $this->faker->name,
        ]);

        $bumdesCategoryUpdate = [
            'name' => $this->faker->name,
        ];

        $response = $this->put('/bumdes-kategori/' . $bumdesCategory->id, $bumdesCategoryUpdate);

        $this->assertDatabaseHas('bumdes_categories', $bumdesCategoryUpdate);

        $response->assertRedirect('/bumdes-kategori');
    }

    public function testAdminCanDeleteBumdesCategory()
    {
        $this->actingAsAdmin();

        $bumdesCategory = BumdesCategory::create([
            'name' => $this->faker->name,
        ]);

        $response = $this->delete('/bumdes-kategori/' . $bumdesCategory->id);

        $this->assertDatabaseMissing('bumdes_categories', $bumdesCategory->toArray());

        $response->assertRedirect('/bumdes-kategori');
    }
}
