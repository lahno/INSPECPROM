<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends SiteController
{
    public function index()
    {
        $this->template = 'home';
        $categories = Categorie::where('type', 'product')->get();
        $about = Page::find(1);

        $this->vars = array_add($this->vars, 'categories', $categories);
        $this->vars = array_add($this->vars, 'about', $about);

        return $this->renderOutput();
    }
}
