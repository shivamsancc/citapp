<?php

namespace App\Imports;

use App\Models\cit_result;
use Maatwebsite\Excel\Concerns\ToModel;

class resultImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new cit_result([
          // 'id '     => $row['id'],
          'exam'      =>$row[0],
          'roll'    =>$row[1],
          'name'       =>$row[2],
          'fname'      =>$row[3],
          'course'=>$row[4],
          'regno'      =>$row[5],
          'session'     =>$row[6],
          'duration'      =>$row[7],
          'examdate'   =>$row[8],
          'studycentre'=>$row[9],
          'theorytotal'  =>$row[10],
          'tmasgg'      =>$row[11],
          'pmt'      =>$row[12],
          'pmagg'   =>$row[13],
          'ptmagg'=>$row[14],
          'ovp'    =>$row[15],
          'grade'   =>$row[16],
          'exam_status'    =>$row[17],
          'coursedetails'=>$row[18],
          'status'    => '1',
          // 'created_at	'    => $row['created_at'],
          // 'updated_at	'    => $row['updated_at'],
        ]);
    }
}
