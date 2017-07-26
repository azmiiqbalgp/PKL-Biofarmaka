<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventaris;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\User;
use Maatwebsite\Excel\Facades\Excel;
class InventarisExcelController extends Controller
{
    public function excel() {

    // Execute the query used to retrieve the data. In this example
    // we're joining hypothetical users and payments tables, retrieving
    // the payments table's primary key, the user's first and last name, 
    // the user's e-mail address, the amount paid, and the payment
    // timestamp.

    $inventariss = Inventaris::select('kode_barang', 'nama_barang','merk_barang','tahun_barang','harga_satuan','jumlah_barang','satuan','jumlah_harga','sumber_dana','B','RR','RB','ket','lokasi')->get();

    // Initialize the array which will be passed into the Excel
    // generator.
    $inventarissArray = []; 

    // Define the Excel spreadsheet headers
    $inventarissArray[] = ['kode_barang','nama_barang','merk_barang','tahun_barang','harga_satuan','jumlah_barang','satuan','jumlah_harga','sumber_dana','B','RR','RB','ket','lokasi'];

    // Convert each member of the returned collection into an array,
    // and append it to the payments array.
    foreach ($inventariss as $inventaris) {
        $inventarissArray[] = $inventaris->toArray();
    }

    // Generate and return the spreadsheet
    Excel::create('inventariss', function($excel) use ($inventarissArray) {

        // Set the spreadsheet title, creator, and description
        $excel->setTitle('Inventaris Sarptas');
        $excel->setCreator('Laravel')->setCompany('Biofarmaka');
        $excel->setDescription('data inventaris');

        // Build the spreadsheet, passing in the payments array
        $excel->sheet('sheet1', function($sheet) use ($inventarissArray) {
            $sheet->fromArray($inventarissArray, null, 'A1', false, false);
        });

    })->download('xlsx');
}
}
