<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getCat()
    {
        return $this->hasOne('App\Models\Categorie', 'id', 'categories_id');
    }
}
