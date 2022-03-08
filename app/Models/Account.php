<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $primaryKey ='id_acc';
    
    // protected $table = 'accounts';
    protected $fillable = [
            'id_acc',
            'first_name' ,
            'last_name' ,
            'phone',
            'photo' ,
            'type' ,
            'mail' ,
            'password'
    ];

}
