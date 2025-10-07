<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $galeris = \App\Models\Galeri::all();
    $profils = \App\Models\Profil::all();
    $siswagurus = \App\Models\Siswaguru::selectRaw('
    COALESCE(SUM(siswa),0) as siswa,
    COALESCE(SUM(siswi),0) as siswi,
    COALESCE(SUM(murid),0) as murid,
    COALESCE(SUM(guru),0) as guru
')->first();
    return view('home', [
        'galeris' => $galeris,
        'profils' => $profils,
        'siswagurus' => $siswagurus
    ]);
});
Route::get('/home', function () {
    $galeris = \App\Models\Galeri::all();
    $profils = \App\Models\Profil::all();
    $siswagurus = \App\Models\Siswaguru::selectRaw('
    COALESCE(SUM(siswa),0) as siswa,
    COALESCE(SUM(siswi),0) as siswi,
    COALESCE(SUM(murid),0) as murid,
    COALESCE(SUM(guru),0) as guru
')->first();
    return view('home', [
        'galeris' => $galeris,
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
