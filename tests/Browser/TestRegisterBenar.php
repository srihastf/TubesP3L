<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestRegisterBenar extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
public function testIsiSemua()
    {
             
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/register')
                    ->type('name', 'Sri Hastuti F')
                    ->type('username', 'shaloxin')
                    ->type('email', 'shaloxin@gmail.com')
                    ->type('password', 'shaloxin')
                    ->type('password_confirmation', 'shaloxin')
                    ->press('Register')
                    ->assertPathIs('/c_customer/create');
                 });                                                     
    }
}
