<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends SiteController
{
    public function posts()
    {
        $this->template = 'posts.posts';

        $categories = Categorie::where('type', 'post')->get();
        $posts = Post::all();

        if ($posts) $posts->load('getCat');
        $about_text = Page::find(1);
        $gallery = Gallery::where('view', 'yes')->get();

//        dd($posts);

        $this->vars = array_add($this->vars, 'posts', $posts);
        $this->vars = array_add($this->vars, 'about_text', $about_text);
        $this->vars = array_add($this->vars, 'categories', $categories);
        $this->vars = array_add($this->vars, 'gallery', $gallery);

        return $this->renderOutput();
    }
    public function post($id)
    {
        $this->template = 'posts.post';

        $post = Post::find($id);
        $about_text = Page::find(1);
        $categories = Categorie::where('type', 'post')->get();
        $gallery = Gallery::where('view', 'yes')->get();

        if ($post) $post->load('getCat');

        $this->vars = array_add($this->vars, 'post', $post);
        $this->vars = array_add($this->vars, 'about_text', $about_text);
        $this->vars = array_add($this->vars, 'categories', $categories);
        $this->vars = array_add($this->vars, 'gallery', $gallery);

        return $this->renderOutput();
    }
}
