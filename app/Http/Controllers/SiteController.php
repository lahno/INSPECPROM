<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    protected $title;
    protected $description;

    protected $template;
    protected $vars = [];

    public function __construct()
    {
        //
    }

    protected function renderOutput(){
        $this->title = env('APP_NAME').' — Развивая настоящее, создаём будущее';

        $this->vars = array_add($this->vars, 'title', $this->title);
        $this->vars = array_add($this->vars, 'description', $this->description);

        $menu_prod = Categorie::where('type', 'product')->get();
        if ($menu_prod) $menu_prod->load('getProducts', 'getParents.getProducts');

        $header = view('header')->with('menu_prod', $menu_prod)->render();
        $this->vars = array_add($this->vars, 'header', $header);

        $about_text = Page::find(1);
        $footer = view('footer')->with('about_text', $about_text)->render();
        $this->vars = array_add($this->vars, 'footer', $footer);

        $modal = view('modal')->render();
        $this->vars = array_add($this->vars, 'modal', $modal);

        $scripts = view('scripts')->render();
        $this->vars = array_add($this->vars, 'scripts', $scripts);

        return view($this->template)->with($this->vars);
    }

}
