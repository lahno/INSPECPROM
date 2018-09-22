<?php

use SleepingOwl\Admin\Navigation\Page;

// Default check access logic
// AdminNavigation::setAccessLogic(function(Page $page) {
// 	   return auth()->user()->isSuperAdmin();
// });
//
// AdminNavigation::addPage(\App\User::class)->setTitle('test')->setPages(function(Page $page) {
// 	  $page
//		  ->addPage()
//	  	  ->setTitle('Dashboard')
//		  ->setUrl(route('admin.dashboard'))
//		  ->setPriority(100);
//
//	  $page->addPage(\App\User::class);
// });
//
// // or
//
// AdminSection::addMenuPage(\App\User::class)

return [
    [
        'title' => 'Posts',
        'icon'  => 'fa fa-group',
        'pages' => [
            (new Page(\App\Models\Categorie::class))
                ->setIcon('fa fa-user')
                ->setPriority(900),
            (new Page(\App\Models\Product::class))
                ->setIcon('fa fa-user')
                ->setPriority(100),
            (new Page(\App\Models\Post::class))
                ->setIcon('fa fa-user')
                ->setPriority(200),
            (new Page(\App\Models\Page::class))
                ->setIcon('fa fa-user')
                ->setPriority(300)
        ],
        'priority' => 100
    ],
    [
        'title' => 'User',
        'icon'  => 'fa fa-group',
        'pages' => [
            (new Page(\App\User::class))
                ->setIcon('fa fa-user')
                ->setPriority(0),
            (new Page(\App\Models\Role::class))
                ->setIcon('fa fa-user')
                ->setPriority(100)
        ],
        'priority' => 200
    ],
    [
        'title' => 'Gallery',
        'icon'  => 'fa fa-group',
        'pages' => [
            (new Page(\App\Models\Gallery::class))
                ->setIcon('fa fa-user')
                ->setPriority(0),
            (new Page(\App\Models\TypeGallery::class))
                ->setIcon('fa fa-user')
                ->setPriority(100)
        ],
        'priority' => 300
    ],
];