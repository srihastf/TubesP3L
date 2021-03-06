<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestRegisterEmailSalah extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
public function testIsiEmailSalah()
    {
             
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/register')
                    ->type('name', 'fikri12221')
                    ->type('username', 'fikri13921')
                    ->type('email', 'fikri13921@gmail.com')
                    ->type('password', 'fikri2921')
                    ->type('password_confirmation', 'fikri2921')
                    ->press('Register')
                    ->assertPathIs('/c_customer/create');
                 });                                                     
    }
}
