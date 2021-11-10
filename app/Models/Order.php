<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'surname', 'address', 'phone', 'mail', 'total'];

    public function plates()
    {
        return $this->belongsToMany('App\Models\Plate')->withTimestamps()->withPivot('quantity');
    }

    public function getFormattedDate($column, $format = 'd-m-Y H:i')
    {
        return Carbon::create($this->$column)->format($format);
    }
}
