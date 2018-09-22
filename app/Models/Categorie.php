<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'name_ua', 'name_en', 'image', 'desc', 'desc_ua', 'desc_en', 'parent_id', 'type'
    ];

    public function getProducts()
    {
        return $this->hasMany('App\Models\Product', 'categories_id', 'id');
    }

    public function getParents()
    {
        return $this->hasMany('App\Models\Categorie', 'parent_id', 'id');
    }
}
