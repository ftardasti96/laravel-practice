<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function about(){
        // $myName = 'Fateme';
        // $myLastName = 'Tardasti';
        // return view('pages/about',compact('myName'),compact('myLastName'));
        $data = array(
            'myName' => 'Fateme',
            'myLastName' => 'Tardasti'
        );
        return view('pages/about')->with($data);
    }
    function services(){
        $data = array(
            'title' => 'atroon',
            'services' => ['blog','seo','advertisement']
        );
        return view('pages/service')->with($data);
    }
    function call(){
        return view('pages/call');
    }
}
