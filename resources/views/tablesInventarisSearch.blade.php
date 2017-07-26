@extends('layouts/layoutUser')
@section('title','Search Result')
@section('content')
<body>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tables
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="/user">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
                 @include('flash::message')
                <!-- /.row -->
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                  <br>
                          {!! link_to_route('export.excel', 
                                'Export to Excel', null, 
                                ['class' => 'btn btn-success pull-right']) 
                          !!}
                  <form action="/searchInventaris" id="redirect">
              
                    <div id="custom-search-input">
                        <div class="input-group col-md-4">
                            <input type="text" class="form-control input-sm" name="q" placeholder="Search Record" />
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-sm" id="toform" >
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
              
                  </form>
                  <br>
              </div>

              <div class="table-responsive">
                <table id="users-table" class="table table-bordered table-hover table-striped">
                    <thead bgcolor="#757475">
                            <th rowspan="2" style="vertical-align:middle"><font color="white"><center>id_inventaris</center></th>
                            <th rowspan="2" style="vertical-align:middle"><font color="white"><center>kode_barang</center></th></font>
                            <th rowspan="2" style="vertical-align:middle"><font color="white"><center>nama_barang</center></th></font>
                            <th rowspan="2" style="vertical-align:middle"><font color="white"><center>merk_barang</center></th></font>
                            <th rowspan="2" style="vertical-align:middle"><font color="white"><center>tahun_pembuatan</center></th></font>
                            <th rowspan="2" style="vertical-align:middle"><font color="white"><center>jumlah_barang</center></th></font>
                            <th colspan="3"><font color="white"><center>kondisi barang</center></th></font>
                            <th rowspan="2" style="vertical-align:middle"><font color="white"><center>action</center></th></font>
                            <tr>                    
                              <th><font color="white"><center>B</center></th></font>
                              <th><font color="white"><center>RR</center></th></font>
                              <th><font color="white"><center>RB</center></th></font>
                            </tr>   
                    </thead>
                    <tbody>
                    @foreach($inventariss as $inventaris)
                    <tr>
                            <td><center>{{$inventaris->id_inventaris}}</center></td>
                            <td><center>{{$inventaris->kode_barang}}</center></td>
                            <td><center>{{$inventaris->nama_barang}}</center></td>
                            <td><center>{{$inventaris->merk_barang}}</center></td>
                            <td><center>{{$inventaris->tahun_pembuatan}}</center></td>
                            <td><center>{{$inventaris->jumlah_barang}}</center></td>
                            <td><center>{{$inventaris->B}}</center></td>
                            <td><center>{{$inventaris->RR}}</center></td>
                            <td><center>{{$inventaris->RB}}</center></td>
                            <td align="center">                  
                              
                              {!! Form::model($inventaris,['route'=>['inventaris.edit',$inventaris],'method'=>'get','id'=>'formEdit' ]) !!}
                                  <a href="" role="button" class="btn-sm btn-info" data-toggle="modal" data-target="#ModalInventaris{{$inventaris->id_inventaris}}">Detail</a>
                                  {{-- {!! Form::submit('Edit',array('class' => 'btn-xs btn-primary')) !!} --}}
                                  <a href="#" role="button" class="btn-sm btn-warning" onmouseup="return document.getElementById('formEdit').submit();">Edit</a>
                                  <a id="" href="/inventarisDelete/{{$inventaris->id_inventaris}}" class="btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> 
                              {!! Form::close() !!}
                              
                            </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
              </div>
            </div>
            {{-- <center>{{ $inventariss->links() }}</center> --}}
@foreach($inventariss as $inventaris)
  <!-- Modal Detail Paket-->
    <div class="modal fade in" id="ModalInventaris{{$inventaris->id_inventaris}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" value="">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header hidden-print">
                      <button type="button" class="close" data-dismiss="modal">
                             <span aria-hidden="true">&times;</span>
                             <span class="sr-only">Close</span>
                      </button>
                  </div>
                  
                  <!-- Modal Body -->
            <div class="modal-body">  
              <div class="panel panel-lg-default">
                <div class="table-responsive">        
                  <table class="table table-striped">
                    <tr style="background-color: #757475">
                      <td colspan="2" align="center" ><h5 style="font-family:roboto; color:white;">DETAIL INVENTARIS SAPRAS</h5></td>
                    </tr>
                    <tr>
                      <td align="right"><b>id_inventaris</b></td>
                      <td align="left">{{$inventaris->id_inventaris}}</td>
                    </tr>
                    <tr>
                      <td align="right"><b>Kode_barang</b></td>
                      {{-- <th>Kode_barang</th> --}}
                      <td align="left">{{$inventaris->kode_barang}}</td>
                    </tr>
                    <tr>
                      <td align="right"><b>Nama_barang</b></td>
                      {{-- <th>Nama_barang</th> --}}
                      <td align="left">{{$inventaris->nama_barang}}</td>
                    </tr>
                    <tr>
                      <td align="right"><b>Merk_barang</b></td>
                      {{-- <th>Merk_barang</th> --}}
                      <td align="left">{{$inventaris->merk_barang}}</td>
                    </tr>
                    <tr>
                      <td align="right"><b>Tahun_barang</b></td>
                      {{-- <th>Tahun_barang</th> --}}
                      <td align="left">{{$inventaris->tahun_barang}}</td>
                    </tr>
                    <tr>
                      <td align="right"><b>Jumlah_barang</b></td>
                      {{-- <th>Jumlah_barang</th> --}}
                      <td align="left">{{$inventaris->jumlah_barang}}</td>
                    </tr>
                    <tr>
                      <td align="right"><b>Satuan</b></td>
                      {{-- <th>Satuan</th> --}}
                      <td align="left">{{$inventaris->satuan}}</td>
                    </tr>
                    <tr>
                      <td align="right"><b>Jumlah_harga</b></td>
                      {{-- <th>Jumlah_harga</th> --}}
                      <td align="left">{{$inventaris->jumlah_harga}}</td>
                    </tr>
                    <tr>
                      <td align="right"><b>Sumber_dana</b></td>
                      {{-- <th align="right">Sumber_dana</th> --}}
                      <td align="left">{{$inventaris->sumber_dana}}</td>
                    </tr>
                    <tr>
                      
                      <td style="vertical-align: middle" align="right" rowspan="3"><b>Kondisi_barang</b></td>
                      {{-- <th>Kondisi_barang</th> --}}
                      <td align="left"><b>B&emsp;: </b>{{$inventaris->B}}</td>
                    </tr>
                    <tr>
                      <td align="left"><b>RR : </b>{{$inventaris->RR}}<td>
                    </tr>
                    <tr>
                      
                      <td align="left"><b>RB : </b>{{$inventaris->RB}}</td>
                    </tr>
                    <tr>
                      <td align="center" colspan="2">
                      <b>Foto_barang</b><br><br>
                      <a href="{{url('/image', $inventaris->gambar)}}" target="_blank"><img class="img-rounded img-responsive" src="{{asset('imageInventaris/' .$inventaris->gambar) }}" id="" alt="inventaris" width="700" height="auto"></a></td>
                    </tr>
                       
                  </table>
                  </div>
                </div>              
            </div>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary print-window hidden-print">
                      <span class="glyphicon glyphicon-print "></span>  Print
                  </button>
              </div>
          </div>
      </div>
    </div>
  </div>
  @endforeach
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>

@endsection

