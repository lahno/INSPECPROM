<?php

namespace App\Models;

use Illuminate\Support\Facades\Config;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    public function roles()
    {
        return $this->belongsToMany(
            Config::get('entrust.role'),
            Config::get('entrust.permission_role_table'),
            Config::get('entrust.permission_foreign_key'),
            Config::get('entrust.role_foreign_key')
        );
    }
}
