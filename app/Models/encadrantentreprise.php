<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class encadrantentreprise extends Model
{
	protected $primaryKey = 'idencad';
    use HasFactory;
    protected $fillable = ['idencad','nomEncad','prenomEncad','identreprise','numtel','photo','email','password','etat'];

}
