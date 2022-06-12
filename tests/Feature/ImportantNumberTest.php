<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\ImportantNumber;

class ImportantNumberTest extends TestCase
{
    public function testAdminCanSeeImportantNumberPage()
    {
        $this->actingAsAdmin();

        $response = $this->get('/nomer-penting');

        $response->assertStatus(200);
    }

    public function testAdminCanCreateImportantNumber()
    {
        $this->actingAsAdmin();

        $importantNumber = [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
        ];

        $response = $this->post('/nomer-penting', $importantNumber);

        $this->assertDatabaseHas('important_numbers', $importantNumber);

        $response->assertRedirect('/nomer-penting');
    }

    public function testAdminCannotCreateImportantNumberWithInvalidData()
    {
        $this->actingAsAdmin();

        $response = $this->post('/nomer-penting', [
            'name' => '',
            'address' => '',
            'phone' => '',
        ]);

        $response->assertSessionHasErrors();
    }

    public function testAdminCanSeeImportantNumberEditPage()
    {
        $this->actingAsAdmin();

        $importantNumber = ImportantNumber::create([
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
        ]);

        $response = $this->get('/nomer-penting/' . $importantNumber->id . '/edit');

        $response->assertStatus(200);
    }

    public function testAdminCanUpdateImportantNumber()
    {
        $this->actingAsAdmin();

        $importantNumber = ImportantNumber::create([
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
        ]);

        $importantNumberUpdate = [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
        ];

        $response = $this->put('/nomer-penting/' . $importantNumber->id, $importantNumberUpdate);

        $this->assertDatabaseHas('important_numbers', $importantNumberUpdate);

        $response->assertRedirect('/nomer-penting');
    }

    public function testAdminCannotUpdateImportantNumberWithInvalidData()
    {
        $this->actingAsAdmin();

        $importantNumber = ImportantNumber::create([
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
        ]);

        $response = $this->put('/nomer-penting/' . $importantNumber->id, [
            'name' => '',
            'address' => '',
            'phone' => '',
        ]);

        $response->assertSessionHasErrors();
    }

    public function testAdminCanDeleteImportantNumber()
    {
        $this->actingAsAdmin();

        $importantNumber = ImportantNumber::create([
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
        ]);

        $response = $this->delete('/nomer-penting/' . $importantNumber->id);

        $this->assertDatabaseMissing('important_numbers', $importantNumber->toArray());

        $response->assertRedirect('/nomer-penting');
    }
}
