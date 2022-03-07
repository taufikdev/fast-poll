<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
            'first_name' ,
            'last_name',
            'phon',
            'type',
            'mail',
            'photo',
            'password',
    ];
    protected $hidden = ['password'];
    protected $primaryKey = 'id_acc';
    

}
