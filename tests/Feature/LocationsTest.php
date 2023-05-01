<?php

use App\Models\Location;

it('has locations page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

