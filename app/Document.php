<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }

    public function edit_access()
    {
        $perms = $this->permissions->intersect(Role::find(1)->permissions);
        // return $perms;
        // return $perms-where('document_id', '=', )
        $docArr = [];
        foreach ($perms as $perm) {
            array_push($docArr, $perm->user);
        }
        return $docArr;
    }

    public function view_access()
    {
        $perms = $this->permissions->intersect(Role::find(2)->permissions);
        // return $perms;
        // return $perms-where('document_id', '=', )
        $docArr = [];
        foreach ($perms as $perm) {
            array_push($docArr, $perm->user);
        }
        return $docArr;
    }
}
