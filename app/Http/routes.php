<?php

Route::get('/', function () {
    return view('control.elections.index');
});
Route::get('/jornada', function () {
    return view('control.elections.election');
});

Route::get('/distrito', function () {
    return view('control.elections.district');
});

Route::get('/boleta', function () {
    return view('control.elections.card');
});
