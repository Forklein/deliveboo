<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'surname', 'address', 'phone', 'mail', 'total'];

    public function plates()
    {
        return $this->belongsToMany('App/Models/Plate')->withTimestamps();
    }
}
