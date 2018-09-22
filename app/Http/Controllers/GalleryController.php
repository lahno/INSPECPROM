<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\TypeGallery;
use Illuminate\Http\Request;

class GalleryController extends SiteController
{
    public function gallery()
    {
        $this->template = 'pages.gallery';

        $gallery = Gallery::where('view', 'yes')->get();

        if ($gallery) $gallery->load('getType');

        $types = TypeGallery::all();

        $this->vars = array_add($this->vars, 'gallery', $gallery);
        $this->vars = array_add($this->vars, 'types', $types);

        return $this->renderOutput();
    }
}
