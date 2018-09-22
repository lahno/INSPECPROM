<?php

namespace App\Providers;

use App\Models\Categorie;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Post;
use App\Models\Product;
use App\Models\Role;
use App\Models\TypeGallery;
use App\User;
use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        User::class => 'App\Http\Sections\Users',
        Role::class => 'App\Http\Sections\Roles',
        Categorie::class => 'App\Http\Sections\Categories',
        Product::class => 'App\Http\Sections\Products',
        Post::class => 'App\Http\Sections\Posts',
        Page::class => 'App\Http\Sections\Pages',
        Gallery::class => 'App\Http\Sections\Gallery',
        TypeGallery::class => 'App\Http\Sections\TypeGallery',
    ];

    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
