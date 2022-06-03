<?php

namespace Jhonatanfdez\JhonatanPermisos\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //es: desde aqui
    //en: from here

    protected $fillable = [
        'name', 'slug', 'description', 'full-access',
    ];

    public function users(){
        return $this->belongsToMany('App\Models\User')->withTimesTamps();
    }

    public function permissions(){
        return $this->belongsToMany('Jhonatanfdez\JhonatanPermisos\Models\Permission')->withTimesTamps();
    }
}


