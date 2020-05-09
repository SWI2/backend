<?php

namespace Tests\Feature;

use App\User;
use App\Http\Controllers\AuthController;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;
    
    public function setup()
    {
        parent::setup();
        $this->artisan('passport:install');
    }
    
    /** @test*/
    public function login_test()
    {
        $this->withoutExceptionHandling();
        
        $this->createMockUser();
        $this->assertCount(1, User::all());
        
        $response = $this->post('/api/jwt', [
            'email' => 'user@example.com',
            'password' => '123456'
        ]);

        $response->assertOk();
    }

    private function createMockUser() 
    {
        $user = new User();

        $user->name = 'User';
        $user->email = 'user@example.com';
        $password = bcrypt('123456');
        $user->password = $password;

        $user->save();
    }
}