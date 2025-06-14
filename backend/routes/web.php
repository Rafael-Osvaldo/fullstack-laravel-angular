<?php

use Illuminate\Support\Facades\Route;

Route::get('/api/mensagens', function () {
    return response()->json(
        [
            ['texto' => 'HELLO WORLD'],
            ['texto' => 'Mensagem enviada pelo backend'],
        ]
    );
});
