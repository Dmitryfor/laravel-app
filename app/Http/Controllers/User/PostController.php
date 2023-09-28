<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index() 
    {

        $post = [
            'id'       => 10,
            'title'    => 'Lorem ipsum dolor sit amet.',
            'content'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, natus!',
        ];

        $posts = array_fill(0, 10, $post);

        return view('user.posts.index', compact('posts'));
    }

    public function show($post) 
    {
        $post = [
            'id'       => 10,
            'title'    => 'Lorem ipsum dolor sit amet.',
            'content'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, natus!',
        ];

        return view('user.posts.show', compact('post'));
    }

    public function create() 
    {

        return view('user.posts.create');
    }

    public function store( Request $request ) 
    {
        // $title = $request->input('title');
        // $content = $request->input('content');

        // dd( $title, $content );

        alert(__('Saved!'));

        return redirect()->route('user.posts.show', 123);
    }

    public function edit($post) 
    {
        $post = [
            'id'       => 10,
            'title'    => 'Lorem ipsum dolor sit amet.',
            'content'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, natus!',
        ];

        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request, $post) 
    {
        // $title = $request->input('title');
        // $content = $request->input('content');

        // dd( $title, $content );

        alert(__('Updated!'));

        return redirect()->back();
    }

    public function delete($post) 
    {
        return redirect()->route('user.posts.show', $post);
    }

    public function like() 
    {

        return 'Like counter post page Like + 1';

    }

}
