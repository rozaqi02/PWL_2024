<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Fitria Ramadhani Prihandiva dan 2241760055';
    }
    public function articles($id){
        return 'Halaman Artikel dengan Id' .$id;
    }
}