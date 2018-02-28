<?php

namespace DCastanera\Clients;

use Illuminate\Database\Eloquent\Model;

class ConfigurationItem extends Model
{
    /**
     * Fillable fields
     */
    protected $fillable = [
        'client_id',
        'name',
        'url',
        'username',
        'password',
        'created_at',
    ];

    /**
     * Carbon dates
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Eloquent Client
     * @return  Client object
     */
    function client()
    {
        return $this->belongsTo('DCastanera\Clients\Client');
    }

    /**
     * Eloquent Notes
     * @return  Note object
     */
    function notes()
    {
        return $this->morphToMany('DCastanera\Notes\Note', 'noteable');
    }
}
