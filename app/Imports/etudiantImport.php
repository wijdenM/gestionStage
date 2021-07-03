<?php

namespace App\Imports;

use App\Models\etudiant;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;

class etudiantImport implements ToModel,withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new etudiant([
            'idetudiant' => $row['idetudiant'],
            'CIN' => $row['cin'],
            'numinscrit' => $row['numinscrit'],
            'nometudiant' => $row['nometudiant'],
            'prenometudiant' => $row['prenometudiant'],
            'idfiliere' => $row['idfiliere'],
            'photo' => $row['photo'],
            'niveau' => $row['niveau'],
            'email' => $row['email'],
            'password' => $row['numinscrit'],
            'etat' => "active",
        ]);
    }
}
