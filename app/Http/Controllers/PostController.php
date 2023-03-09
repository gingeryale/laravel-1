<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();

        return view('posts', [
            'posts' => Post::latest()->filter(request(['search', 'category']))->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'post' => $post,
        ]);
    }
}


// previous router method
// Route::get('/', function () {
//     $posts = Post::latest()->with('category', 'author')->get();
//     $postsSearch = Post::latest();
//     $categories = Category::all();
//     //dd($posts);
//     if (request('search')) {
//         $postsSearch->where('title', 'like', '%' . request('search') . '%')
//             ->orWhere('body', 'like', '%' . request('search') . '%');
//         return view('posts', [
//             'posts' => $postsSearch->get(),
//             'categories' => Category::all()
//         ]);
//     }
//     return view('posts', [
//         'posts' => $posts,
//         'categories' => $categories
//     ]);
// })->name('home');
