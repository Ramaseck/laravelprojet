<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;

class Row extends Model
{
    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom_name','nomc_name','date_name', 'mail_name', 'mdp_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'mdp_name'
    ];



}
