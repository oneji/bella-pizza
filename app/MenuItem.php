<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public $timestamps = false;

    /**
     * The items that belong to the category.
     */
    public function menu_categories()
    {
        return $this->belongsTo('App\MenuCategory');
    }
}
