<?php

namespace App\Repositories;

use App\Models\Grade;

class GradeRepository
{
    private Grade $model;

    public function __construct(Grade $model)
    {
        $this->model = $model;
    }

    public function allGrades(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->model->all();
    }
}
