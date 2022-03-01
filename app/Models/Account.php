<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'First_Name' ,
            'Last_Name',
            'Phon',
            'Type',
            'Mail',
            'password',
    ];
    protected $hidden = ['password'];
    protected $primaryKey = 'Id_Acc';
    // protected $connection = 'mysql';
    // protected $table = 'accounts';

}
