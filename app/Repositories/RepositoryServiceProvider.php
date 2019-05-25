<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(StudentRepositoryInterface::class, function(){
          return new StudentRepository();
        });
        $this->app->bind(DoctorRepositoryInterface::class, function(){
          return new DoctorRepository();
        });
        $this->app->bind(OutlayRepositoryInterface::class, function(){
          return new OutlayRepository();
        });
    }
}
