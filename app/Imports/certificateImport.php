<?php

namespace App\Imports;

use App\Models\cit_certificate;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class certificateImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new cit_certificate([
          // 'id '     => $row['id'],
          'sl_no'      =>$row[0],
          'cert_no'    =>$row[1],
          'name'       =>$row[2],
          'fname'      =>$row[3],
          'certificate'=>$row[4],
          'iname'      =>$row[5],
          'reg_no'     =>$row[6],
          'grade'      =>$row[7],
          'gradeper'   =>$row[8],
          'period_from'=>$row[9],
          'period_to'  =>$row[10],
          'roll1'      =>$row[11],
          'roll2'      =>$row[12],
          'theory_1'   =>$row[13],
          'practical_1'=>$row[14],
          'total_1'    =>$row[15],
          'theory_2'   =>$row[16],
          'practical_2'=>$row[17],
          'total_2'    =>$row[18],
          'grandtotal' =>$row[19],
          'course_1'   =>$row[20],
          'course_2'   =>$row[21],
          'doi'        =>$row[22],
          'status'    => '1',
          // 'created_at	'    => $row['created_at'],
          // 'updated_at	'    => $row['updated_at'],
        ]);
    }
}
