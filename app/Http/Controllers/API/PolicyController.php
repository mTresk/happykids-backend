<?php

namespace App\Http\Controllers\API;

use App\Filament\Settings\PolicySettings;
use App\Http\Controllers\Controller;

class PolicyController extends Controller
{
    public function index()
    {
        return app(PolicySettings::class)->toJson();
    }
}
