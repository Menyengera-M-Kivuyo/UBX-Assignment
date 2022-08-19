<?php
namespace App\Imports;
use App\Models\Data;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
//use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ImportData implements ToModel //WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
        {
            $checker = Data::where('Cargo_no',$row[0])->first();
            if($checker==null){
                return new Data([
                    'Cargo_no'=>$row[0],
                    'Cargo_type'=>$row[1],
                    'Cargo_size'=>$row[2],
                    'Weight'=>$row[3],
                    'Remarks'=>$row[4],
                    'Wharfage'=>$row[5],
                    'Penalty'=>$row[6],
                    'Storage'=>$row[7],
                    'Electricity'=>$row[8],
                    'Destuffing'=>$row[9],
                    'Lifting'=>$row[10],
                ]);
            }
        }
    }