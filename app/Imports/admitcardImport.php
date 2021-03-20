<?php

namespace App\Imports;

use App\Models\cit_admitcard;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class admitcardImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new cit_admitcard([
          'sn'      =>$row[0],
          'name'    =>$row[1],
          'fname'       =>$row[2],
          'ename'      =>$row[3],
          'session'=>$row[4],
          'duration'      =>$row[5],
          'regno'     =>$row[6],
          'rollno'      =>$row[7],
          'course'   =>$row[8],
          'semester'=>$row[9],
          'scenter'  =>$row[10],
          'ecenter'      =>$row[11],
          'edate'      =>$row[12],
          'rtime'   =>$row[13],
          'notes'=>$row[14],
          'status'    => '1',
        ]);
    }
}
