<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('data-import');
});
Route::get('data-import-export', [DataController::class, 'dataImportExport']);
Route::post('data-import', [DataController::class, 'dataImport'])->name('data-import');
Route::get('data-export', [DataController::class, 'dataExport'])->name('data-export');
Route::get('data-view', [DataController::class, 'dataView'])->name('data-view');
