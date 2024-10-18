<?php

use Laravel\Dusk\Browser;

test('example', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
                ->assertSee('File')
                ->pause(1000);

        $log = $browser->driver->manage()->getLog('browser');

        $this->assertEmpty($log);
    });
});
