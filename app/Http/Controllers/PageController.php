<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends SiteController
{
    public function about()
    {
        $this->template = 'pages.page';

        $page = Page::find(1);
        $this->vars = array_add($this->vars, 'page', $page);

        return $this->renderOutput();
    }
    public function contact()
    {
        $this->template = 'pages.contacts';

        $page = Page::find(2);
        $this->vars = array_add($this->vars, 'page', $page);

        return $this->renderOutput();
    }
}
