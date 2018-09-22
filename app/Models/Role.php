<?php

namespace App\Models;

use Illuminate\Support\Facades\Config;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    public function users()
    {
        return $this->belongsToMany(
            Config::get('auth.providers.users.model'),
            Config::get('entrust.role_user_table'),
            Config::get('entrust.role_foreign_key'),
            Config::get('entrust.user_foreign_key')
        );
    }
    public function permissions()
    {
        return $this->belongsToMany(
            Config::get('entrust.permission'),
            Config::get('entrust.permission_role_table'),
            Config::get('entrust.role_foreign_key'),
            Config::get('entrust.permission_foreign_key')
        );
    }
}
