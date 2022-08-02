<?php

use function Pest\Laravel\get;

test('can get users', function () {
    $response = get(route('users.index'));
    $response->assertStatus(200);
    $response->assertJsonStructure([
        '*' => [
            'id',
            'first_name',
            'last_name',
            'email',
            'created_at',
            'updated_at',
        ]
    ]);
});
