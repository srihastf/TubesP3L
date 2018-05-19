<?php

namespace Tests\Browser;
use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    use DatabaseMigrations;
    
    /**
     * A basic browser test example.
     *
     * @return void
     */

     //template ->type('username', 'wili1412')
                //    ->type('email', 'wili1421@gmail.com')
                //    ->type('password', 'wili1423')
                //    ->type('password_confirmation', 'wili1423')
    public function testIsiNama()
    {
             
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/register')
                    ->type('name', 'fikri2921')
                    ->press('Register')
                    ->assertPathIs('/c_customer/create');;
                 });                                                     
    }
        public function testIsiUserName()
    {
             
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/register')
                    ->type('username', 'fikri2921')
                    ->press('Register')
                    ->assertPathIs('/register');;
                 });                                                     
    }
     public function testIsiEmail()
    {
             
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/register')
                    ->type('email', 'fikri2921@gmail.com')
                    ->press('Register')
                    ->assertPathIs('/register');;
                 });                                                     
    }
         public function testIsiPassword()
    {
             
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/register')
                    ->type('password', 'secretpwd')
                    ->press('Register')
                    ->assertPathIs('/register');;
                 });                                                     
    }
             public function testIsiPassword2()
    {
             
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/register')
                    ->type('password_confirmation', 'secretpwd')
                    ->press('Register')
                    ->assertPathIs('/register');;
                 });                                                     
    }
}
