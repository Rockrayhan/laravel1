<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['title'] = 'Home Page' ;
        return view('home' , $data);
    }

    public function about(){
        $data['title'] = 'About Page' ;
        $data['name']= 'kakku';
        $data['fruits'] = ['apple', 'nut', 'mango'];
        return view('about' , $data);
    }
    
    public function contact(){
        $data['title'] = 'Contact Page' ;
        return view('contact' , $data);
    }

    public function store( Request $request ){
        echo $request->email ;
        echo $request->password ;
        // print_r($request) ;
    }
}
