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
    }
}
