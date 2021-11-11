<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plate extends Model
{
    use SoftDeletes;

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
