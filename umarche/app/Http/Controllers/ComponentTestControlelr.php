<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestControlelr extends Controller
{
    //

    public function showConponent1() {
        return view('test.component-test1');
    }
    
    public function showConponent2() {
        return view('test.component-test2');
    }
}
