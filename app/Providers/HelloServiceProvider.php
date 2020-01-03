<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

// 101ページ
// class HelloServiceProvider extends ServiceProvider
// {
    // /**
    //  * Register services.
    //  *
    //  * @return void
    //  */
    // public function register()
    // {
    //     //
    // }

    // /**
    //  * Bootstrap services.
    //  *
    //  * @return void
    //  */
//     public function boot()
//     {
//         //101ページ
//         View::composer(
//             'hello.index',function($view){
//                 $view->with('view_message','composer message!');
//             }
//         );
//     }
// }

// 105ページ
// class HelloServiceProvider extends ServiceProvider
// {
//     public function boot()
//     {
//         View::composer(
//             'hello.index','App\Http\Composers\HelloComposer'
//         );
//     }
// }

// 150ページ
use Validator;
use App\Http\Validators\HelloValidator;

// class HelloServiceProvider extends ServiceProvider
// {
//     public function boot()
//     {
//         $validator = $this->app['validator'];
//         $validator ->resolver(function($translator,$data,$rules,$messages){
//           return new HelloValidator($translator,$data,$rules,$messages);
//         });
//     }
// }

// 153ページ
class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('hello',function($attribute,$value,$parameter,$validator){
          return $value % 2 ==0;
        });
    }
}

