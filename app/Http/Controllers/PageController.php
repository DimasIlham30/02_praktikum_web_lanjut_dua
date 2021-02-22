<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\PageController;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Nim : 1941720206 <br> Nama : Dimas Ilham Rivaldy';
    }
    public function articles($id){
        return 'Halaman Artikel dengan Id '. $id;
    }
}