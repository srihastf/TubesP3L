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
                    ->type('name', 'fikri13921')
                    ->type('username', 'fikri13921')
                    ->type('email', 'fikri13921gmail.com')
                    ->type('password', 'fikri2921')
                    ->type('password_confirmation', 'fikri2921')
                    ->press('Register')
                    ->assertPathIs('/register');
                 });                                                     
    }
}
