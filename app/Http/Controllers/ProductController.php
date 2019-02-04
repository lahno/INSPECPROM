<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends SiteController
{
    public function products()
    {
        $this->template = 'products.products';

        $categories = Categorie::where('type', 'product')->get();

        $this->vars = array_add($this->vars, 'categories', $categories);

        return $this->renderOutput();
    }
    public function product($id)
    {
        $this->template = 'products.product';

        $product = Product::where('id', $id)->where('view', 'yes')->first();

        if ($product){
            $product->load('getCat');
            $this->vars = array_add($this->vars, 'product', $product);
            return $this->renderOutput();
        }
        return abort(404);
    }
}
