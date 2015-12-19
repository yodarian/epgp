<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loot extends Model
{
    protected $table = 'loot';

    public function members()
    {
        return $this->belongsToMany('App\Member')->withTimestamps();
    }

    public static function getLootListForSelect()
    {
        $loots = Loot::all(array('id', 'item_lvl', 'slot'))->toArray();

        $selectLoots = array(0 => 'Please Select');

        foreach ($loots as $loot) {
            $selectLoots[$loot['id']] = $loot['item_lvl'] . ' ' . $loot['slot'];
        }

        return $selectLoots;
    }
}
