<?php

namespace DCastanera\Clients;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * Fillable fields
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'address2',
        'city',
        'state',
        'zip',
        'phone',
        'email',
        'user_id',
    ];

    /**
     * Date mutator
     */
    protected $dates = [
        'created_at',
        'modified_at',
        'deleted_at',
    ];

    /**
     * Eloquent Client
     * @return Client object
     */
    function clients()
    {
        return $this->belongsToMany('DCastanera\Clients\Client');
    }

    /**
     * Eloquent Data
     * @return Object Object containing additional custom contact data.
     */
    function data()
    {
        return $this->hasOne(config('clients.contact_data_table'));
    }

    /**
     * Eloquent Notes
     * @return  Note object
     */
    function notes()
    {
        return $this->morphMany('DCastanera\Notes\Note', 'noteable');
    }

    /**
     * Eloquent User
     * @return  User object
     */
    function user()
    {
        return $this->belongsTo(config('auth.providers.users.model'));
    }

}
