<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loot extends Model
{
    protected $table = 'loot';

    protected $fillable = [
        'item_lvl',
        'slot',
        'gear_points',
        'name'
    ];

    public function members()
    {
        return $this->belongsToMany('App\Member')->withTimestamps()->withPivot('awarded_at');
    }

    /**
     * Get the names of all members associated with this item
     *
     * @return string
     */
    public function getMembersAsString()
    {
        $memberStr = '';
        $numberMembers = $this->members->count();
        $i = 1;

        foreach ($this->members as $member) {
            $memberStr .= '<a href="' . route('members.show', $member->id) . '" data-toggle="tooltip" title="' . $member->pivot->awarded_at . '">' . $member->name . '</a>';
            if ($i < $numberMembers) {
                $memberStr .= ', ';
                $i++;
            }
        }
        return $memberStr;
    }

    /**
     * @return array
     */
    public static function getLootListForSelect()
    {
        $loots = Loot::all(array('id', 'item_lvl', 'slot', 'name'))->toArray();

        $selectLoots = array(0 => 'Please Select');

        foreach ($loots as $loot) {
            $selectLoots[$loot['id']] = $loot['name'] . ' (' . $loot['item_lvl'] . ' ' . $loot['slot'] . ')';
        }

        return $selectLoots;
    }
}
