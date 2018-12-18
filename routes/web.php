<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//app()->singleton('App\Services\Twitter',function (){
//    return new \App\Services\Twitter('qwe');
//});

use App\Services\Twitter;
use App\Repositories\UserRepository;
use App\Task;
Route::get('/', function (Task $tasks) {
//    dd($users);

//    dd($twitter);
//    dd(app('App\Example'));

//dd(app('foo'));  //  app/Providers/AppServiceProvider.php

//    $tasks = [
//        'i',
//        'l',
//        'o',
//        'v',
//        'e'
//    ];
//    return view('welcome')->with([
//        'tasks' => $tasks,
//        'foo' => request('title'),
//        'script' => '<script>alert(1)</script>',
//    ]);
//    return view('welcome')->withTasks($tasks)->withFoo('foo')->withScript( '<script>alert(1)</script>');
    return view('welcome',[
        'tasks' => $tasks,
        'foo' => request('title'),
        'script' => '<script>alert(1)</script>',
    ]);
});
Route::resource('/projects','ProjectsController');
//Route::resource('/projects','ProjectsController')->middleware('can:update,project');
Route::patch('/tasks/{task}','ProjectTasksController@update');
//Route::post('/projects/{project}/tasks','ProjectTasksController@store');
Route::post('/completed-tasks/{task}','CompletedTaskController@store');
Route::delete('/completed-tasks/{task}','CompletedTaskController@destory');


Route::match(['get','post'],'/admin/index/{name}');
Route::get('/translate', 'TranslateController@index');
Route::get('/crawling', 'CrawlingController@index');
Route::get('/google2fa','GoogleauthController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/authenticate', 'LoginController@authenticate');
Route::get('profile', function () {
    // Only authenticated users may enter...
})->middleware('auth.basic');
Route::get('api/user', function () {
    // Only authenticated users may enter...
})->middleware('auth.basic.once');