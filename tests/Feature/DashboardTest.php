<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/** @test */
class DashboardTest extends TestCase
{
    /**@test**/
   public function test_it_shows_the_dashboard_page_to_authenticated_users(){
        $user = factory(User::class)->create(); 

        $this->actingAs($user)
            ->get(route('home'))
            ->assertSee('Dashboard')
            ->assertStatus(200);

   }

   public function test_it_redirects_guest_users_to_the_login_page(){
        $this->get('home')
            ->assertStatus(302)
            ->assertRedirect('login');
   }
}
