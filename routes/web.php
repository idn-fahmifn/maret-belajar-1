<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Route Basic
 * Route get digunakan untuk menampilkan atau mengambil data dari sebuah tabel.
 */
Route::get('/latihan', function(){
    // output : 
    return 'Ini adalah materi latihan laravel';
});

// menampilkan halaman.
Route::get('/halaman', function(){
    // output menampilkan halaman : 
    return view('halaman');
})->name('first-page');

// Route menggunakan parameter.
Route::get('/mobil/{param}', function($mobil){
    return 'Ini adalah mobil saya, mereknya adalah : '.$mobil ;
})->name('mobil.parameter');

// memberikan nilai default pada parameter.
Route::get('motor/{param?}', function($motor = 'honda'){
    return 'Ini adalah motor saya, mereknya adalah : '.$motor ;
})->name('motor.parameter');

Route::get('makanan/{param?}', function($makanan = 'bebas'){
    return 'Saya suka sekali dengan makanan : '.$makanan ;
})->name('makanan.parameter');

// Route menampilkan data di halaman. 
Route::get('nama/{param?}', function($saya = 'belum didefinisikan'){
    $training = 'Laravel';
    return view('nama', compact('saya', 'training'));
})->name('nama.halaman');



/**
 * Grouping
 * group training
 */
Route::prefix('training')->group(function(){ //nama group
    // item pertama pada group (training/laravel)
    Route::get('laravel', function(){
        return 'ini adalah halaman laravel';
    })->name('laravel');

    // item kedua pada group (training/flutter)
    Route::get('flutter', function(){
        return 'ini adalah halaman Flutter';
    })->name('flutter');

    // item ketiga pada grooup (training/hello)
    Route::get('hello', function(){
        return 'hello page';
    })->name('hello');
});
