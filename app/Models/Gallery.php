<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';

    public function getType()
    {
        return $this->hasOne('App\Models\TypeGallery', 'id', 'type_id');
    }
}
