<?php

namespace App\Imports;

use App\Models\Certificate;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CertificateInfoImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $time = strtotime($row['course_date']);
        $newformat = date('Y-m-d',$time);

        return new Certificate([
            'student_name'=> $row['student_name'],
            'student_code'=> $row['student_code'],
            'course_name'=> $row['course_name'],
            'course_date'=> $newformat
        ]);
    }
}
