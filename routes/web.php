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
    $allFiles = File::files(resource_path("posts"));
    foreach($allFiles as $singleFile){
        $documentObject = YamlFrontMatter::parseFile($singleFile);
        $posts[]=new Post(
            $documentObject->title,$documentObject->excerpt,$documentObject->date,$documentObject->body(), $documentObject->slug
        );
    }
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
