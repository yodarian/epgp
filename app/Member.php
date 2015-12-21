<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'gp'
    ];

    /**
     * Get events associated with given member
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function events()
    {
        return $this->belongsToMany('App\Event')->withTimestamps();
    }

    public function loot()
    {
        return $this->belongsToMany('App\Loot')->withTimestamps()->withPivot('awarded_at');
    }

    public static function getMembersForMultiselect()
    {
        $members = Member::all(array('id', 'name'))->toArray();

        $multiselectMembers = array();

        foreach ($members as $member) {
            $multiselectMembers[$member['id']] = $member['name'];
        }

        return $multiselectMembers;
    }

    public function getEp()
    {
        $ep = 0;
        $events = $this->events->all();

        foreach ($events as $event) {
            $ep += $event->ep;
        }

        return $ep;
    }

    public function getPriorityAttribute()
    {
        $ep = $this->getEp();
        $gp = $this->getGearPoints();

        return round($ep / $gp, 2);
    }

    public function setPriorityAttribute($priority)
    {
        $this->priority = $priority;
    }

    public function getGearPoints()
    {
        $gp = 0;
        $loot = $this->loot->all();

        foreach ($loot as $item) {
            $gp += $item->gear_points;
        }

        return $gp > 0 ? $gp : 1;
    }
}
