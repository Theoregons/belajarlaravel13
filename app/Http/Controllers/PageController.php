<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Ini halaman menggunakan controller';
    }
    public function request(){
        return 'Ini halaman request menggunakan controller';
    }
    public function requestdata(Request $request){
        return $request;
    }
}
