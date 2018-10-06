<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestRegisterTanpaAtEmail extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
public function testIsiEmailTanpaAt()
    {
             
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/register')
                    ->type('name', 'mitaamara')
                    ->type('username', 'mitaamara')
                    ->type('email', 'mitaamaragmail.com')
                    ->type('password', 'mita123')
                    ->type('password_confirmation', 'mita123')
                    ->press('Register')
                    ->assertPathIs('/register');
                 });                                                     
    }
}
