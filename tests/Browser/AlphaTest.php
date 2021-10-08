<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Throwable;

class AlphaTest extends DuskTestCase
{
    /**
     * @throws Throwable
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/alpha')
                ->assertSee('Alpha')
                ->clickLink('Next')
                ->assertPathIs('/beta');
        });
    }
}
