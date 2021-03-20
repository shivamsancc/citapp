<?php

namespace App\Imports;

use App\cit_admission;
use Maatwebsite\Excel\Concerns\ToModel;

class admissionImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new cit_admission([
          'id '     => $row['id'],
          'sname'    => $row['sname'],
          'fname'    => $row['fname'],
          'course'    => $row['course'],
          'studycenter'    => $row['studycenter'],
          'regno'    => $row['regno'],
          'doa'    => $row['doa'],
          'coc'    => $row['coc'],
          'session'    => $row['session'],
          'Duration'    => $row['Duration'],
          'Batch time'    => $row['Batch time'],
          'status'    => $row['status'],
        ]);
    }
}
