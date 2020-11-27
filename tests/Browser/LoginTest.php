<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testGrantEvaluationTableIsSeen()
    {
        $this->browse(function (Browser $browser) {
            $browser = $this->login($browser);
            $browser->visit('/admin.php?menuID=grantevaluation')->assertSee('Taotlusvoorude hindamispaketid');
            
            $table = $browser->with('table thead', function($table){
                $table->assertSee('Taotlusvoor');
                $table->assertSee('Valdkond/Alamvaldkond');
                $table->assertSee('Staatus');
                $table->assertSee('Taotluste hindamise tähtaeg');
            });    
        });
    }

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testGrantEvaluationTableFilterIsSeen()
    {}

    /**
     * @param Browser $browser
     * 
     * @return Browser
     */
    private function login(Browser $browser): Browser
    {
        $browser->visit('https://oleg:gyNV3p3z+ex4@muinas.smart2be.com/')
            ->assertSee('Logi sisse')
            ->press('#button-login')
            ->type('username', 'KarinM')
            ->type('password', 'Muinas123')
            ->press('Logi sisse')
            ->pause(2000);

        $browser->with('#head', function($head) {
            $head->assertSee('Karin Merilo');
        });

        return $browser;
    }
}
