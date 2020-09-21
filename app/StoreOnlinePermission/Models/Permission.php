<?php

namespace App\StoreOnlinePermission\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    protected $fillable = [
        'name', 'slug', 'description', 
    ];
    public function roles(){
        return $this->belongsToMany('App\StoreOnlinePermission\Models\Role')->withTimesTamps();
    }
}