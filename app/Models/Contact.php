<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // protected $table = 'user';// to map model with db table

    use HasFactory;
    protected $guarded = []; //add all properties to fillable
// protected $fillable = [
//     'name',
//     'email',
//     'phone',
// ];
}