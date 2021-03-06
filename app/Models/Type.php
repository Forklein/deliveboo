<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name', 'color'];

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
