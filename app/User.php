<?php

namespace App;

use DocumentSeeder;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public function editable_docs()
    {
        $perms = $this->permissions->intersect(Role::find(1)->permissions);
        $docArr = [];
        foreach ($perms as $perm) {
            array_push($docArr, $perm->document);
        }
        return collect($docArr);
    }
    public function viewable_docs()
    {
        $perms = $this->permissions->intersect(Role::find(2)->permissions);
        // return $perms;
        // return $perms-where('document_id', '=', )
        $docArr = [];
        foreach ($perms as $perm) {
            array_push($docArr, $perm->document);
        }
        return collect($docArr);


    }
    public function all_docs()
    {
        return $this->docs_w_permissions->union($this->documents);
    }
    public function docs_w_permissions()
    {
        return $this->belongsToMany('App\Document', 'permissions', 'user_id', 'document_id');
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
