<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
  
    protected $primaryKey='Id_Profil';
    protected $fillable = [
        'id_acc' ,
        'id_add',
        'description',
        'experience',     
];

}
