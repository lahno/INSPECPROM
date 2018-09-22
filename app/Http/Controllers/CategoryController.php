<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Page;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends SiteController
{
    public function getCategory($id)
    {
        $cat = Categorie::find($id);
        $categories = Categorie::where('type', $cat->type)->get();
        if ($categories) $categories->load('getProducts');

        switch ($cat->type) {
            case 'product':
                $query = Product::where('categories_id', $cat->id);
                $this->template = 'products.product_catalog';
                break;
            case 'post':
                $query = Post::where('categories_id', $cat->id);
                $this->template = 'posts.posts';
                break;
            case 'page':
                $query = Page::where('categories_id', $cat->id);
                $this->template = 'pages.pages';
                break;
            case 'other':
                $query = Product::where('categories_id', $cat->id);
                $this->template = 'products.product_catalog';
                break;
            default:
                $query = Product::where('categories_id', $cat->id);
                $this->template = 'products.product_catalog';
        }

        $item = $query->get();

        $this->vars = array_add($this->vars, 'item', $item);
        $this->vars = array_add($this->vars, 'cat', $cat);
        $this->vars = array_add($this->vars, 'categories', $categories);

        return $this->renderOutput();
    }
}
