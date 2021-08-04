<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';
    protected $fillable = [
        'name', 'medicalcode', 'password','lastname','addresss','gender','nationalnumber','phonenumber','takhasos',
        'birthday'
    ];



}
