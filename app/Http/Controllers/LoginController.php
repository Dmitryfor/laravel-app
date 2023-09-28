<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function index() 
    {

        $foo = session('foo');

        return view('login.index');

    }

    public function create() 
    {

        return 'Create post page';

    }

    public function store( Request $request ) 
    {
        alert(__('You are welcome !!'));

        // if ( true ) {
        //     return redirect()->back()->withInput();
        // }

        return redirect()->route('user.posts');
    }

}
