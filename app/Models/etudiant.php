<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    use HasFactory;
    
    protected $table ='etudiants';
    protected $primaryKey = 'idetudiant';

    protected $fillable = ['idetudiant','CIN','numinscrit','nometudiant','prenometudiant','idfiliere','photo','email','password','etat'];
}
