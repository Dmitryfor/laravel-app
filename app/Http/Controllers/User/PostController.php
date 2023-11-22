<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    
    public function index() 
    {
        $posts = Post::query()->paginate(6);

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
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:100000'],
            'published_at' => ['nullable', 'string', 'date'],
            'published' => ['nullable', 'boolean'],
        ]);

        $post = Post::query()->create([
            'user_id'   => User::query()->value('id'),
            'title'     => $validated['title'],
            'content'   => $validated['content'],
            'published_at' => $validated['published_at'] ?? null,
            'published' => $validated['published'] ?? false,
        ]);

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
