<?php

namespace Jhonatanfdez\JhonatanPermisos\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    
    protected $fillable = [
        'name', 'slug', 'description',
    ];

    public function roles(){
        return $this->belongsToMany('Jhonatanfdez\JhonatanPermisos\Models\Role')->withTimesTamps();
    }
}
