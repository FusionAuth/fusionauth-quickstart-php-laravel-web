<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

// Route::get('/login', function () {
//     return view('index');
// });

// Route::get('/logout', function () {
//     return view('index');
// });

Route::get('/account', function () {
    return view('account', ['email' => 'temp@example.com']);
});

Route::get('/change', function () {
    $state = [
        'error' => false,
        'hasChange' => false,
        'total' => '',
        'nickels' => '',
        'pennies' => '',
    ];
    return view('change', ['state' => $state, 'email' => 'temp@example.com']);
});

Route::post('/change', function (Request $request) {
    $amount = $request->input('amount');
    $state = [
        'error' => false,
        'hasChange' => true,
        'total' => '',
        'nickels' => '',
        'pennies' => '',
    ];

    $total = floor(floatval($amount) * 100) / 100;
    $state['total'] = is_nan($total) ? '' : number_format($total, 2);

    $nickels = floor($total / 0.05);
    $state['nickels'] = number_format($nickels);

    $pennies = ($total - (0.05 * $nickels)) / 0.01;
    $state['pennies'] = ceil(floor($pennies * 100) / 100);

    $state['error'] = !preg_match('/^(\d+(\.\d*)?|\.\d+)$/', $amount);

    return view('change', ['state' => $state, 'email' => 'temp@example.com']);
});
