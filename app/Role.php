<?php

namespace App;

use App\Permission;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }

    // public function documents()
    // {
    //     return $this->hasManyThrough('App\Document', 'App\Permission');
    // }
}
