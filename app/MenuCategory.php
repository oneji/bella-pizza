<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    public $timestamps = false;

    /**
     * The category that belong to the item.
     */
    public function menu_items()
    {
        return $this->hasMany('App\MenuItem');
    }
}
