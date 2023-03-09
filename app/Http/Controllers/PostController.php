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

        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get(),
            // 'categories' => Category::all(),
            // 'currentCategory' => Category::firstWhere('slug', request('category'))
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
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
