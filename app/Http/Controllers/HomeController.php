<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');

    }
    public function login(){
        return view('login');

    }
    public function about(){
        $data = [
            'name' => 'Rania Khalila Bahri',
            'address' => 'Kalibagor',
            'email' => '541231181@student.smktelkom-pwt.sch.id'
        ];
        return view('about', $data);

    }

}
