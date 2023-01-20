<?php

namespace App\Models;

use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{
    // public $title;
    // public $excerpt;
    // public $date;
    // public $body;
    public function __construct(public $title,$excerpt,$date,$body,$slug){
        $this->title=$title;
        $this->excerpt=$excerpt;
        $this->date=$date;
        $this->body=$body;
        $this->slug=$slug;
    }
    public static function all()
    {
        // $files = File::files(resource_path("posts/"));
        // return array_map(function ($file) {
        //     return $file->getcontents();
        // }, $files);
       return collect(File::files(resource_path("posts")))
    ->map(fn($file) => YamlFrontMatter::parseFile($file))
    ->map(fn($doc) => new Post(
        $doc->title,
        $doc->excerpt,
        $doc->date,
        $doc->body(),
        $doc->slug
        ));
    }


    public static function find($slug)
    {
        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
            //dd('404 error');
            // abort(404);
            throw new ModelNotFoundException();
        }
        return cache()->remember("posts.{$slug}", 1, fn () => file_get_contents($path));
    }
}
