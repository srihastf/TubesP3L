<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestRegisterUserNameBenar extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
            $this->browse(function (Browser $browser) {
            
            $browser->visit('/register')
                    ->type('name', 'bbbbbbbbbb')
                    ->type('username', 'bbbbbbbbbb')
                    ->type('email', 'bbbbbbbb@gmail.com')
                    ->type('password', 'bbbbbb@@GGFF')
                    ->type('password_confirmation', 'bbbbbb@@GGFF')
                    ->press('Register')
                    ->assertPathIs('/c_customer/create');
                 });                                                     
    
}
