<?php

namespace App\Imports;

use App\Models\enseignant;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;

class enseignantImport implements ToModel,withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new enseignant([
            'idenseignant' => $row['idenseignant'],
            'numCNSS' =>$row['cnss'],
            'nomenseignant' => $row['nomenseignant'],
            'prenomenseignant' => $row['prenomenseignant'],
            'grade' => $row['grade'],
            'iddepartement' => $row['iddepartement'],
            'numtel' => $row['numtel'],
            'photo' => $row['photo'],
            'email' => $row['email'],
            'password' => $row['cnss'],
            'etat' => "active",
            'encad' => "0",
        ]);
    }
}
