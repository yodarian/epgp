<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'number_bosses',
        'number_firstkills',
        'time_spend',
        'ep',
        'bonus_ep'
    ];

    /**
     * Get members associated with given event
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function members()
    {
        return $this->belongsToMany('App\Member')->withTimestamps();
    }

    /**
     * Get the names of all members associated with this event
     *
     * @return string
     */
    public function getMembersAsString()
    {
        return implode(',', $this->members->lists('name')->all());
    }

    /**
     * Get the ids of all members associated with this event as an array
     *
     * @return mixed
     */
    public function getMemberIdsAsArray()
    {
        return $this->members->lists('id')->all();
    }
}
