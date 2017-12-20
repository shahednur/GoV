<?php

namespace App;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public function permissions(){

	    return $this->belongsToMany('App\Permission', 'permission_role', 
	      'permission_id', 'role_id');
    }

}
