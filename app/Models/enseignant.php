<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enseignant extends Model
{
	protected $primaryKey = 'idenseignant';
    use HasFactory;
    protected $fillable = ['idenseignant','numCNSS','nomenseignant','prenomenseignant','iddepartement','numtel','grade','photo','email','password','etat','encad'];
}
