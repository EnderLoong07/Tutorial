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

/*
Route::get('/',function(){
    
    $container = new \App\Container();
    
    $container->bind('example', function(){
        return new \App\Example();
    });
    
    $example = $container->resolve('example');
    
    $example->go();
});
*/



Route::get('/', 'PagesController@home');
/*
 * 
Route::get('/', function(){
    $example = resolve(App\Example::class);
    
    ddd($example);
});


Route::get('/', function () {
 //   return ['foo' => 'bar'];
    return view('welcome');
});
*/

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');

Route::get('/payment', 'PaymentsController@show');
Route::post('/payment', 'PaymentsController@store');

Route::get('/about', function () {
    
    return view('about', [
        'articles'=> App\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles','ArticlesController@index')->name('articles.index');
Route::post('/articles','ArticlesController@store');
Route::get('/articles/create','ArticlesController@create');
Route::get('/articles/{article}','ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit','ArticlesController@edit');
Route::put('/articles/{article}','ArticlesController@update');



/*
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test',[
        'name' => request('name')
    ]);   
});


Route::get('/post/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post!',
        'my-second-post' => 'Now, I am getting the hang of this blogging thing'
    ];
    
    if(!array_key_exists($post, $posts))
        abort (404, 'Sorry, that post was not found');
    
    return view('post',[
        'post' => $posts[$post] 
    ]);
});
*/

Route::get('post/{post}', 'PostController@show');