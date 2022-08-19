<?php
namespace App\Exports;
use App\Models\Data;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
class ExportData implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Data::select('Cargo_no','Cargo_type','Cargo_size','Weight',
        'Remarks','Wharfage','Penalty','Storage',
        'Electricity','Destuffing','Lifting' )->get();
    }
    public function headings(): array
    {
        return[
            'Cargo no','Cargo type','Cargo size','Weight (Kg)',
            'Remarks','Wharfage (USD)','Penalty (Days)','Storage (USD)',
            'Electricity (USD)','Destuffing (USD)','Lifting (USD)', 
        ];
    }
}