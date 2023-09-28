<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index( Request $request ) 
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');

        $post = [
            'id'       => 10,
            'title'    => 'Lorem ipsum dolor sit amet.',
            'content'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, natus!',
            'category_id' => 1,
        ];

        $posts = array_fill(0, 10, $post);

        $posts = array_filter($posts, function($post) use ( $search, $category_id ) {
            if ($search && ! str_contains( strtolower($post['title']), strtolower($search) )) {
                return false;
            }

            if ($category_id && $category_id != $post['category_id'] ) {
                return false;
            }

            return true;
        });

        $categories = [
            null => 'Select a Category', 
            '1' => 'First Category', 
            '2' => 'Second Category'
        ];

        return view('posts.index', compact('posts', 'categories'));

    }

    public function show() 
    {

        $post = [
            'id'       => 10,
            'title'    => 'Lorem ipsum dolor sit amet.',
            'content'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, natus!',
        ];

        return view('posts.show', compact('post'));

    }

    public function create() 
    {

        return 'Create post page';

    }

    public function store() 
    {

        return 'Request save post';

    }

    public function edit() 
    {

        return 'Edit post page';

    }

    public function update() 
    {

        return 'Update post page';

    }
    
    public function delete() 
    {

        return 'Delete post page';

    }

    public function like() 
    {

        return 'Like counter post page Like + 1';

    }

}
