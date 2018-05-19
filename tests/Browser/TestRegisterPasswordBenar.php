<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestRegisterPasswordBenar extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testIsiPasswordBenar()
    {
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/register')
                    ->type('name', 'aaaaaaaa')
                    ->type('username', 'aaaaaaaaa')
                    ->type('email', 'aaaaaaa@gmail.com')
                    ->type('password', 'aaaaaaa@@ff')
                    ->type('password_confirmation', 'aaaaaaa@@ff')
                    ->press('Register')
                    ->assertPathIs('/c_customer/create');
                 });                                                     
    }
}

