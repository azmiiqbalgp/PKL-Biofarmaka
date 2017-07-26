<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventaris;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\User;
class TabelInventarisController extends Controller
{
    
    public function index(){

        $inventaris= Inventaris::all();
    	return view('tables',['inventariss'=>$inventaris]);
    }    

    public function show($id)
    {
        $i1=1;
        $inventariss= Inventaris::where(['roles_id'=>$id])->paginate(6);
        return view('tables',['inventariss' => $inventariss,'i1'=>$i1]);
    }
}

