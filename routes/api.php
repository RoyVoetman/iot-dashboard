<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->put('/webhook/update-unit/{ip}/{value}', function (string $ip, string $value) {
    $unit = \App\Models\Unit::where('ip', $ip)->first();
    $unit->value = $value;
    $unit->save();

    \App\Events\UnitUpdated::dispatch($unit);
});
