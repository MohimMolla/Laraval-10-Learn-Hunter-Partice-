<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ExampleProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // $data = database theke data anlam;
      $data= array();
      $data['a']=2;
      $data['b']=3;
      $data['c']=$data['a']+$data['b'];
      view()->share('number',$data);
    }
}
