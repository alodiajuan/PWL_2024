<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){ return('Hello World');
    }
    
    public function greeting(){ return view('blog.hello')
    ->with('name','Alodia Juan Feronika')
    ->with('occupation','Data Scientist');
    }
}
    

?>