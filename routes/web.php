<?php

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
    return 'Olá!';
});
