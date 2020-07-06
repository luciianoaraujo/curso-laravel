<?php

/*
Route::get('login', function(){
    return "Login";
}) ->name('login');

Route::middleware([])->group(function(){
    Route::prefix('admin')->group(function(){

        Route::namespace('Admin')->group(function(){
            Route::name('admin.')->group(function(){
                Route::get('/dashboard', 'Admin\TesteController@teste')->name('dashboard');
        
                Route::get('/financeiro', 'Admin\TesteController@teste')->name('financeiro');
                
                Route::get('/products', 'Admin\TesteController@teste')->name('products');
                
                Route::get('/', function(){
                    return redirect()->route('admin.dashboard');
                })->name('home');
            };
        });
    });
});
*/

Route::group([
    'meddleware' =>[],
    'prefix' => 'admin',
    'as' => 'admin.'
], function(){
    Route::get('/dashboard', 'Admin\TesteController@teste')->name('dashboard');
        
    Route::get('/financeiro', 'Admin\TesteController@teste')->name('financeiro');
    
    Route::get('/products', 'Admin\TesteController@teste')->name('products');
    
    Route::get('/', function(){
        return redirect()->route('admin.dashboard');
    })->name('home');
});


Route::get('redirect3', function(){
    return redirect()->route('url.name');
});

url('urll.name');

Route::get('nome-url', function(){
    return "Hey hey hey";
}) ->name('url.name');

Route::view('/view', 'welcome');

// Route::get('/views', function () {
//     return view('welcome');
// });

 Route::redirect('/redirect1', '/redirect2');

// Route::get('redirect1', function(){
//     return redirect('/redirect2');
// });

Route::get('redirect2', function(){
    return 'Redirect 02';
});

Route::get('/produtos/{idProduct}', function($idProduct = ''){
    return "Produtos(s) {$idProduct}";
});

Route::get('/categorias/{flag}/posts', function($flag){
    return "Posts da categoria: $flag
    ";
});

Route::get('/categorias/{flag}', function($flag){
    return "Produtos da categoria: $flag
    ";
});

Route::any('/any', function() {
    return 'Any';
});

Route::match(['get', 'post'], '/match', function() {
    return 'match';
});

Route::post('/register', function() {
    return '';
});

Route::get('/empresa', function() {
    return view('site.contact');
});

Route::get('/contato', function() {
    return 'Contato';
});

Route::get('/', function () {
    return view('welcome');
});
