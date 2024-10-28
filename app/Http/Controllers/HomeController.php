<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index'); // ini merujuk ke halaman index.blade.php di folder resourse/views
    }
    public function login(){
        return view('login'); // ini merujuk ke halaman login.blade.php di folder resourse/views
    }
    public function about(){
        $data = [
            'name'    => 'Rosy Aisyah Fortunately',
            'address' => 'Banyumas',
            'email'   => '541231193@student.smktelkom-pwt.sch.id'
        ];
        return view('about', $data); // ini merujuk ke halaman about.blade.php di folder resourse/views
    }
}
