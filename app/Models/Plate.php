<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    protected $fillable = [
        'name', 'ingredients', 'description', 'course', 'image', 'price', 'visibility'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order')->withTimestamps()->withPivot('quantity');
    }
}
