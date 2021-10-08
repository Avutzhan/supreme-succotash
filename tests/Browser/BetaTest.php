<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Throwable;

class BetaTest extends DuskTestCase
{
    /**
     * @throws Throwable
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/beta')
                ->assertSee('Beta')
                ->clickLink('Previous')
                ->assertPathIs('/alpha');
        });
    }
}
