<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportData;
use App\Exports\ExportData;
use App\Models\Data;
class DataController extends Controller
{
    public function index()
    {
        $data = DB::table('data')->get();
       return responce($data, 200);
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function dataImportExport()
    {
       return view('data-import');
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function dataImport(Request $request) 
    {
        $validatedData = $request->validate([
 
            'file' => 'required',
  
         ]);
        Excel::import(new ImportData, $request->file('file')->store('temp'));
        return back()->with('status', 'Data Uploaded Successfully');
    }
    /*
    * @return \Illuminate\Support\Collection
    */
    public function dataExport() 
    {
        return Excel::download(new ExportData, 'UBX-data.xlsx');
    }  
    public function dataView() 
    {
        $data = DB::table('data')->get();
        return view('data-view', compact('data'));
    }  
}