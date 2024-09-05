<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function user(){ return view('user')
    ->with('id','2334')
    ->with('name','Alodia Juan Feronika');
    }
}
    

?>