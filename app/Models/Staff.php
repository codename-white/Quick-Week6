<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $table = 'staff';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'birthdate', 'salary', 'photo', 'phone'];
}
