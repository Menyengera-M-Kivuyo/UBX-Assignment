<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Data extends Model
{
    use HasFactory;
    protected $table='data';
    protected $primaryKey='Cargo_no';
    protected $fillable = [
        'Cargo_no','Cargo_type','Cargo_size','Weight',
        'Remarks','Wharfage','Penalty','Storage',
        'Electricity','Destuffing','Lifting' 
    ];
}

