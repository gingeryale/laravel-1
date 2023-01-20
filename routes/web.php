<?php

use App\Models\Post;
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
    $posts = Post::all();
    // $posts = collect(File::files(resource_path("posts")))
    // ->map(fn($file) => YamlFrontMatter::parseFile($file))
    // ->map(fn($doc) => new Post(
    //     $doc->title,
    //     $doc->excerpt,
    //     $doc->date,
    //     $doc->body(),
    //     $doc->slug
    //     ));
    
       
    // });

    // $posts = array_map(function($file){
    //     $doc = YamlFrontMatter::parseFile($file);
    //     return new Post(
    //         $doc->title,$doc->excerpt,$doc->date,$doc->body(), $doc->slug
    //     );
    // }, $files);
    
    //dd($posts);
    return view('posts', [
        'posts' => $posts
    ]);
});

Route::get('posts/{post}', function ($slug) {
    return view('post', [
        'post' => Post::find($slug)
    ]);
})->where('post', '[A-z0-9_\-]+');
