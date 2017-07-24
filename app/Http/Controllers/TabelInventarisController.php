<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventaris;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Yajra\Datatables\Facades\Datatables;
use Session;
class TabelInventarisController extends Controller
{
    
    public function index(){

        $inventaris= Inventaris::all();
    	return view('tables',['inventariss'=>$inventaris]);
    }
    public function get_datatable(){

    	$inventaris = Inventaris::select(['id_inventaris','kode_barang','nama_barang','merk_barang','tahun_barang','jumlah_barang','B','RR','RB',])->get();
        return Datatables::of($inventaris)->addColumn('action', function ($inventaris) {
                return '
                <center><a href="" class="" role="button" data-toggle="modal" data-target="#ModalInventaris{{$inventaris->id_inventaris}}">Detail </a>
                &nbsp;<a href="/inventaris/'.$inventaris->id_inventaris.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                &nbsp;<a href="/inventarisDelete/'.$inventaris->id_inventaris.'" class="btn btn-xs btn-danger" onclick="return confirm(/are you sure want to delete?/)"><i class="glyphicon glyphicon-remove"></i> Delete</a></center>';
            })
            ->editColumn('id_inventaris', 'ID:{{$id_inventaris}}')->order(function ($inventaris) {
                    if (request()->has('id_inventaris')) {
                        $inventaris->orderBy('kode_barang', 'desc');
                    }
                })
            ->make(true);
            return $inventaris;
    }
}

// <a href="/inventarisDelete/'.$inventaris->id_inventaris.'" class="btn btn-xs btn-danger" ><i class="glyphicon glyphicon-delete" ></i> Delete</a>';
