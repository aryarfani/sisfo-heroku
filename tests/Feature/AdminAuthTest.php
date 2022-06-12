<?php

namespace Tests\Feature;

use App\Desa;
use App\Admin;
use Tests\TestCase;

class AdminAuthTest extends TestCase
{
    public function testAdminCanSeeRegistrationPage()
    {
        $response = $this->get('register');

        $response->assertStatus(200);
    }

    public function testAdminCanRegisterAccount()
    {
        $response = $this->withExceptionHandling()->post('register', [
            'name' => 'New Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
            'password_confirmation' => 'admin123',
            'desa_id' => 0,
            'new_desa' => 'NamaDesa',
        ]);

        $this->assertDatabaseHas('admins', [
            'name' => 'New Admin',
            'email' => 'admin@gmail.com'
        ]);

        $this->assertDatabaseHas('desa', [
            'nama' => 'NamaDesa'
        ]);

        $this->assertAuthenticated();

        $response->assertRedirect('/login');
    }

    public function testAdminCanSeeLoginPage()
    {
        $response = $this->get('login');

        $response->assertStatus(200);
    }

    public function testAdminCanLogin()
    {
        $desa = Desa::create(['nama' => 'NamaDesa']);
        $admin = Admin::create([
            'name' => 'New Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'desa_id' => $desa->id,
        ]);

        $response = $this->post(route('login'), [
            'email' => $admin->email,
            'password' => 'admin123',
        ]);

        $response->assertRedirect('dashboard');

        $this->assertAuthenticated();

        $this->assertAuthenticatedAs($admin);
    }
}
