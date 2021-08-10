<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Patient extends Model
{
    use Notifiable;
    protected $table = "patients";
    //
    protected $fillable = [
        'first_name',
        'last_name',
        'national_code',
        'birthday',
        'location',
        'gender',
        'pregnancy_status',
        'phone_number',
        'special_conditions',
        'created_at',
        'updated_at'
    ];

    protected $cast = [
        'birthday' => 'datetime'
    ];
}
