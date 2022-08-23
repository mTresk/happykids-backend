<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomePageResource;
use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class HomeController extends Controller
{
    public function index()
    {
        //return HomePageResource::collection(HomePage::all());
        return new HomePageResource(HomePage::first());
    }
}
