<?php

namespace App;

use Laratrust\Models\LaratrustPermission;

class Permission extends LaratrustPermission
{
    public function roles(){

	    return $this->belongsToMany('App\Role', 'permission_role', 
	      'permission_id', 'role_id');
    }
}
