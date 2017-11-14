<?php

//route basic(dasar)
//Route::get('/', function () {
    //return view('welcome');

//});

//Route::get('/about',function() {
	//return '<h1>Hallo ini halaman about</h1>'
	//.'Selamat datang di web aap saya<br>'
	//.'Laravel,emang keren.';
//});

//Route::get('/kontak', function () {
//    return view('kontak');

//});

//Route::get('propil', function () {
//    return view('user/propil');

//});
//Route::get('/about/1',function() {
//	return '<h1>ini halaman baru</h1>';
//});

//
//	return '<h1>Ini halaman lama</h1>';
//});
//Route::get('/about/3',function() {
//	return '<h1>Ini halaman barusan</h1>';
//});

//Route::get('/about/4',function() {
//	return '<h1>Ini halaman lama banget</h1>';
//});
//Route::get('/about/5',function() {
	//return '<h1>Ini halaman about lama</h1>';
//});


//route parameter
//Route::get('/about/{page}',function($a) {
//	return 'Ini halaman about lama <b>'.$a.'</b>';
//});

//Route::get('/kantin/{makanan}/{minuman}/{cemilan}',function($u,$b,$c) {
	//return 'Saya pesan makanan <b>'.$u.'</br>'.'</b>'
	//.'minumannya <b>'.$b.'</b>'.'</br>'
	//.'cemilan nya <b>'.$c.'</b>';
//});

//route optional parameter
Route::get('/user/{name?}',function($name = 'fitri nur syabilla') {
	return 'nama saya '.$name;
});