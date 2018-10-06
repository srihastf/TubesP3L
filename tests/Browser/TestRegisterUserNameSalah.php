<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestRegisterUserNameSalah extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testIsiUserNameSalah()
    {
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/register')
                    ->type('name', 'rizaln')
                    ->type('username', 'nur')
                    ->type('email', 'nur@gmail.com')
                    ->type('password', 'xx123456')
                    ->type('password_confirmation', 'xx123456')
                    ->press('Register')
                    ->assertPathIs('/register');
                 });                                                     
                }
}
