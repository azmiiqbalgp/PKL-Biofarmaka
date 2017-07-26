<?php
use App\Inventaris;
use Illuminate\Support\Facades\Input;
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
    return view('auth.login');
});

Route::resource('user','UserController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('inventaris','InventarisController');
Route::resource('inventaris', 'InventarisController', ['parameters' => [
    'id' => 'id_inventaris'
]]);
Route::resource('tabelInventaris', 'TabelInventarisController', ['parameters' => [
    'id' => 'roles'
]]);
Route::get('inventarisDelete/{id}','InventarisController@destroy');
Route::any('/searchInventaris',function(){
    $q = Input::get ( 'q' );
    $inventaris = Inventaris::where('kode_barang','LIKE','%'.$q.'%')->orWhere('nama_barang','LIKE','%'.$q.'%')->orWhere('id_inventaris','LIKE','%'.$q.'%')->orWhere('merk_barang','LIKE','%'.$q.'%')->orWhere('sumber_dana','LIKE','%'.$q.'%')->orWhere('lokasi','LIKE','%'.$q.'%')->get();
    if(count($inventaris) > 0)
        return view('tablesInventarisSearch',['inventariss'=>$inventaris])->withDetails($inventaris)->withQuery ( $q );
    else
        flash('No Data Found')->error();
        return view ('tablesInventarisSearch',['inventariss'=>$inventaris]);
});
Route::get('/payments/excel', 
[
  'as' => 'export.excel',
  'uses' => 'InventarisExcelController@excel'
]);
Route::get('/image/{id}', function ($id) {
    return view('image', ['id'=>$id]);
});