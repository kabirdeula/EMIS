<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase; // Refresh the database before each test
    /**
     * A basic test example.
     */
    public function testHomePage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('The Ultimate Education Management System');
    }

    /**
     * Test the authenticated user can access the dashboard.
     *
     * @return void
     */
    public function testStudentDashboardAccess()
    {
        $user = [
            'name' => 'Test',
            'email' => 'test@text.com',
            'type' => 0,
            'password' => bcrypt('test'),
        ];
        $user = User::create($user);

        $response = $this->actingAs($user)->get('/student/home');

        $response->assertStatus(200);
    }

    public function testAdminDashboardAccess()
    {
        $user = [
            'name' => 'Test',
            'email' => 'test@text.com',
            'type' => 1,
            'password' => bcrypt('test'),
        ];
        $user = User::create($user);

        $response = $this->actingAs($user)->get('/admin/home');

        $response->assertStatus(200);
    }

    public function testTeacherDashboardAccess()
    {
        $user = [
            'name' => 'Test',
            'email' => 'test@text.com',
            'type' => 2,
            'password' => bcrypt('test'),
        ];
        $user = User::create($user);

        $response = $this->actingAs($user)->get('/teacher/home');

        $response->assertStatus(200);
    }
}

