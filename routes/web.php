<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $berandas = \App\Models\Beranda::all();
    $profils = \App\Models\Profil::all();
    $siswagurus = \App\Models\Siswaguru::selectRaw('
    COALESCE(SUM(siswa),0) as siswa,
    COALESCE(SUM(siswi),0) as siswi,
    COALESCE(SUM(murid),0) as murid,
    COALESCE(SUM(guru),0) as guru
')->first();
    return view('home', [
        'berandas' => $berandas,
        'profils' => $profils,
        'siswagurus' => $siswagurus
    ]);
});
Route::get('/home', function () {
    $berandas = \App\Models\Beranda::all();
    $profils = \App\Models\Profil::all();
    $siswagurus = \App\Models\Siswaguru::selectRaw('
    COALESCE(SUM(siswa),0) as siswa,
    COALESCE(SUM(siswi),0) as siswi,
    COALESCE(SUM(murid),0) as murid,
    COALESCE(SUM(guru),0) as guru
')->first();
    return view('home', [
        'berandas' => $berandas,
        'profils' => $profils,
        'siswagurus' => $siswagurus
    ]);
});
Route::get('/profil', function () {
    $profils = \App\Models\Profil::all();
    return view('profil', [
        'profils' => $profils]);
});
Route::get('/ekstrakulikuler', function () {
    return view('ekstrakulikuler');
});
Route::get('/galeri', function () {
    return view('galeri');
});
