<?php

use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML('<h1>Test</h1>');
    return $pdf->stream();
});

Route::get('/table', function () {
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadView('welcome');
    return $pdf->stream();
});
