<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventaris;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Yajra\Datatables\Facades\Datatables;
use Auth;
class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct(){

    //     $this->middleware('auth');
    //     $this->middleware('rule:admin');

    // }

    public function index()
    {
        return view('forms');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request, [
            'roles_id'=> 'required',
            'kode_barang'=> 'required|max:20',
            'nama_barang'=> 'required|max:50',
            'merk_barang'=> 'required|max:20',
            'tahun_barang'=> 'required|max:20',
            'harga_satuan'=> 'required|max:20',
            // 'jumlah_barang'=> 'required|max:20',
            // 'satuan'=> 'required|max:20',
            // 'jumlah_harga'=> 'required|max:20',
            // 'sumber_dana'=> 'required|max:20',
            // // 'B'=> 'required|max:20',
            // // 'RR'=> 'required|max:20',
            // // 'RB'=> 'required|max:20',
            // 'ket'=> 'max:20',
            // 'lokasi'=> 'required|max:20',
            // 'image'=> 'max:20',
        ]);


        $input= new Inventaris;
        $input->roles_id=$request->roles_id;
        $input->kode_barang=$request->kode_barang;
        $input->nama_barang=$request->nama_barang;
        $input->merk_barang=$request->merk_barang;
        $input->tahun_barang=$request->tahun_barang;
        $input->harga_satuan=$request->harga_satuan;
        $input->jumlah_barang=$request->jumlah_barang;
        $input->satuan=$request->satuan;
        $input->jumlah_harga=$request->jumlah_harga;
        $input->sumber_dana=$request->sumber_dana;
        $input->lokasi=$request->lokasi;

        $input->ket=$request->ket;
        $input->B=$request->b;
        $input->RR=$request->rr;
        $input->RB=$request->rb;
        
        if(count($request->image)>0){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $request->file('image')->move("imageInventaris/",$fileName);
            $input->gambar = $fileName;
        }
        $input->save();
        flash('Input Inventaris Berhasil !!.')->success();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventaris=Inventaris::find($id);
        return view('formsEdit',['inventaris' => $inventaris]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'roles_id'=> 'required',
        //     'kode_barang'=> 'required|max:20',
        //     'nama_barang'=> 'required|max:50',
        //     'merk_barang'=> 'required|max:20',
        //     'tahun_barang'=> 'required|max:20',
        //     'harga_satuan'=> 'required|max:20',
        //     // 'jumlah_barang'=> 'required|max:20',
        //     // 'satuan'=> 'required|max:20',
        //     // 'jumlah_harga'=> 'required|max:20',
        //     // 'sumber_dana'=> 'required|max:20',
        //     // // 'B'=> 'required|max:20',
        //     // // 'RR'=> 'required|max:20',
        //     // // 'RB'=> 'required|max:20',
        //     // 'ket'=> 'max:20',
        //     // 'lokasi'=> 'required|max:20',
        //     // 'image'=> 'max:20',
        // ]);

        $input = Inventaris::findOrFail($id);
        $input->roles_id=$request->roles_id;
        $input->kode_barang=$request->kode_barang;
        $input->nama_barang=$request->nama_barang;
        $input->merk_barang=$request->merk_barang;
        $input->tahun_barang=$request->tahun_barang;
        $input->harga_satuan=$request->harga_satuan;
        $input->jumlah_barang=$request->jumlah_barang;
        $input->satuan=$request->satuan;
        $input->jumlah_harga=$request->jumlah_harga;
        $input->sumber_dana=$request->sumber_dana;
        $input->lokasi=$request->lokasi;

        $input->ket=$request->ket;
        $input->B=$request->b;
        $input->RR=$request->rr;
        $input->RB=$request->rb;

        if(count($request->image)>0){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $request->file('image')->move("imageInventaris/",$fileName);
            $input->gambar = $fileName;
        }
        $input->save();
        flash('Edit Inventaris Berhasil !!.')->success();
        return redirect()->back();     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $inventaris= Inventaris::find($id);
        $inventaris->delete();
        flash('Delete Inventaris Berhasil !!.')->success();
        return redirect()->back();
    }
}
