<?php

namespace App\Repositories;

use App\Models\HomePage;

class HomePageRepository
{
    private HomePage $model;

    public function __construct(HomePage $model)
    {
        $this->model = $model;
    }

    public function allHomePageData()
    {
        return $this->model->first();
    }
}
