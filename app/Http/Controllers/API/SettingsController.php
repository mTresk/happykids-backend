<?php

namespace App\Http\Controllers\API;

use App\Filament\Settings\GeneralSettings;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{

    public function index()
    {
        return app(GeneralSettings::class)->toJson();

    }
}
