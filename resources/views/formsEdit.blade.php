@extends('layouts/layoutUser')
@section('title','Form Input Inventaris')
@section('content')       
<body>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Inventaris Sarpras
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                        @include('flash::message')
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">

                    <div class="col-lg-6">
                        {!! Form::model($inventaris, ['route' => ['inventaris.update', $inventaris], 'method'=>'patch', 'files' => true]) !!}
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <div class="form-group">
                                <label>KODE BARANG</label>
                                <input class="form-control" required="true" name="kode_barang" value="{{$inventaris->kode_barang}}">
                                <p class="help-block">Contoh: 3.05.02.01.003</p>
                            </div>
                            <div class="form-group">
                                <label>NAMA BARANG</label>
                                <input class="form-control" required="true" name="nama_barang" value="{{$inventaris->nama_barang}}">
                                <p class="help-block">Contoh: kursi</p>
                            </div>
                            <div class="form-group">
                                <label>MERK/TYPE</label>
                                <input class="form-control" required="true" name="merk_barang" value="{{$inventaris->merk_barang}}">
                                <p class="help-block">Contoh: Lokal</p>
                            </div>
                            <div class="form-group">
                                <label>TAHUN PEMBUATAN/PEMBELIAN</label>
                                <input class="form-control" required="true" name="tahun_barang" value="{{$inventaris->tahun_barang}}">
                                <p class="help-block">Contoh: 2004</p>
                            </div>
                            <div class="form-group">
                                <label>HARGA SATUAN(Rp.)</label>
                                <input type="text" class="form-control" required="true" id="harga_satuan" name="harga_satuan" value="{{$inventaris->harga_satuan}}">
                                <p class="help-block">Contoh: 40000</p>
                            </div>
                            <div class="form-group">
                                <label>JUMLAH BARANG</label>
                                <input type="text" class="form-control" required="true" id="jumlah_barang" name="jumlah_barang" value="{{$inventaris->jumlah_barang}}">
                                <p class="help-block">Contoh: 4</p>
                            </div>
                            <div class="form-group">
                                <label>SATUAN</label>
                                <input class="form-control" required="true" name="satuan" value="{{$inventaris->satuan}}">
                                <p class="help-block">Contoh: buah atau set</p>
                            </div>
                            <div class="form-group">
                                <label>JUMLAH HARGA(Rp.)</label>
                                <input type="text" class="form-control" id="result" required="true" name="jumlah_harga" value="{{$inventaris->jumlah_harga}}">
                                <p class="help-block" style="color: red">*Count By System</p>
                            </div>
                            <div class="form-group">
                                <label>SUMBER DANA</label>
                                <input class="form-control" required="true" name="sumber_dana" value="{{$inventaris->sumber_dana}}">
                                <p class="help-block">Contoh: DM</p>
                            </div>

                            <label>KONDISI BARANG</label>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>B</label>
                                        <input class="form-control"  name="b" value="{{$inventaris->B}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>RR</label>
                                        <input class="form-control" name="rr" value="{{$inventaris->RR}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>RB</label>
                                        <input class="form-control"  name="rb" value="{{$inventaris->RB}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>KET</label>
                                <input class="form-control" name="ket" value="{{$inventaris->ket}}">
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>LOKASI</label>
                                <input class="form-control" required="true" name="lokasi" value="{{$inventaris->lokasi}}">
                                <p class="help-block">Contoh: RPK</p>
                            </div>
                            
                                <div class="form-group">
                                    <label>Input Gambar <strong style="color:red">*optional</strong></label>
                                    <input type="file" name="image" accept="image/*"  onchange="tampilkanPreview(this,'preview')" value="{{$inventaris->gambar}}">
                                </div>
                                <img src="{{asset('imageInventaris/' .$inventaris->gambar) }}" id="preview" width="220px" />
                            
                            <input type="hidden" name="roles_id" value="{{Auth::user()->roles}}" >
                            <!-- Modal Footer -->
                         
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">
                                        Simpan
                                    </button>
                                </div>

                        {!! Form::close() !!}

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


</body>

@endsection
