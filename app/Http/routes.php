<?php

Route::get('/', function () {
    return view('control.elections.index');
});
Route::get('/eleccion', function () {
    return view('control.elections.election');
});

Route::get('/distrito', function () {
    return view('control.elections.district');
});

Route::get('/boleta', function () {
    return view('control.elections.card');
});

Route::get('/demanda', function () {
    return view('control.elections.demand');
});


Route::get('/nueva-eleccion', function () {
    return view('control.admin.new-election');
});
Route::get('/partidos', function () {
    return view('control.admin.new-politic');
});
Route::get('/usuarios', function () {
    return view('control.admin.new-user');
});




Route::get('/usuario', function () {
    return view('control.user.profile');
});
