<?php

namespace App\Http\Controllers\Admin;

use App\Events\UnitUpdated;
use App\Events\UpdateRequest;
use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

/**
 * Class UnitController
 *
 * @package App\Http\Controllers\Admin
 */
class UnitController extends Controller
{
    /**
     * @param  string  $ip
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(string $ip): RedirectResponse
    {
        UpdateRequest::dispatch($ip, request('payload'));

        return redirect('/admin/dashboard');
    }

    /**
     * @param  string  $ip
     * @param  string  $value
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function webhook(string $ip, string $value): JsonResponse
    {
        $unit = Unit::where('ip', $ip)->first();
        $unit->value = $value;
        $unit->save();

        UnitUpdated::dispatch($unit);

        return response()->json(['status' => 200]);
    }
}
