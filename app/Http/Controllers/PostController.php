<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use function PHPUnit\Framework\callback;

class PostController extends Controller
{
    
    public function index( Request $request ) 
    {
        $categories = [
            null => 'Select a Category', 
            '1' => 'First Category', 
            '2' => 'Second Category'
        ];

        $posts = Post::all(['id', 'title', 'published_at']);

        $posts = Post::query()->get(['id', 'title', 'published_at']);

        // Pagination
        $validated = $request->validate([
            'limit' => ['nullable', 'integer', 'min:1', 'max:100'],
            'page'  => ['nullable', 'integer', 'min:1', 'max:100'],
        ]);

        $limit  = $validated['limit'] ?? 6;
        $page   = $validated['page'] ?? 1;
        $offset = $limit * ($page - 1);

        $posts  = Post::query()->limit($limit)->offset($offset)->get(['id', 'title', 'published_at']);


        // select * from posts order by published_at desc
        $posts = Post::query()->orderBy('published_at', 'DESC')->paginate(3, ['id', 'title', 'published_at']);

        // Current Query
        $posts = Post::query()->latest('published_at')->paginate(3);

        return view('posts.index', compact('posts', 'categories'));
    }

    public function show( Request $request, Post $post ) 
    {
        // select * from posts order by published_at asc limit 1
        // $post = Post::query()->oldest('published_at')->firstOrFail(['id', 'title', 'content']);

        // select id, title, content, published_at from posts where id in (1, 2, 3, 4)
        // $post = Post::query()->find(['1, 2, 3, 4'], ['id', 'title', 'content', 'published_at']);

        // select id, title, content, published_at from posts where id=123 limit 1
        // $post = Post::query()->findOrFail($post, ['id', 'title', 'content', 'published_at']);

        // With cache
        // $post = cache()->remember("posts.{$post}", now()->addHour(), function() use($post) {
        //     return Post::query()->findOrFail($post);
        // });

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
