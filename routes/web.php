<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
//use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::with('category')->get();
    return view('posts', [
        'posts' => $posts
    ]);
});

// Route model binding - match var name with wildcard name
Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});


Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('users/{post:user_id}', function (Category $category) {
    return view('posts', [
        'posts' => $user->id
    ]);
});
