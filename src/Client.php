<?php

namespace DCastanera\Clients;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    /**
     * Fillable fields
     */
    protected $fillable = [
        'name',
        'address',
        'address2',
        'city',
        'state',
        'zip',
        'phone',
        'website',
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
     * Eloquent Configuratiom Item
     * @return  ConfigurationItem object
     */
    function configuration_items()
    {
        return $this->hasMany('DCastanera\Clients\ConfigurationItem');
    }

    /**
     * Eloquent Contact
     * @return  Contact object
     */
    function contacts()
    {
        return $this->belongsToMany('DCastanera\Clients\Contact');
    }

    /**
     * Eloquent Data
     * @return Object Object containing additional custom client data.
     */
    function data()
    {
        return $this->hasOne(config('clients.client_data_table'));
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
    function users()
    {
        return $this->belongsToMany(config('auth.providers.users.model'));
    }

}
