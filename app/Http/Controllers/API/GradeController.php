<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\GradeResource;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GradeController extends Controller
{

    public function index()
    {
        return GradeResource::collection(Grade::all());
    }

    public function show(Grade $grade)
    {
        return new GradeResource($grade);
    }

}
