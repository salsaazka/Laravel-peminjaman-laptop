<?php

namespace App\Imports;

use App\Models\Borrow;
use Maatwebsite\Excel\Concerns\ToModel;

class BorrowsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Borrow([
            'name'=> $row[0],
            'nis'=> $row[1],
            'teacher'=> $row[2],
            'purposes'=> $row[3],
            'ket'=> $row[4],
            'region'=> $row[5],
            'date'=> \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[6])->format('Y-m-d'),
            
        ]);
    }
}
