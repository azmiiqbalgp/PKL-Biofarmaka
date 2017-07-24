@extends('layouts/layoutUser')
@section('title','Table Inventaris')
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
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
                @include('flash::message')
                <!-- /.row -->
              <div class="table-responsive">
                <table id="users-table" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <td><center><strong>id_inventaris</strong></center></td>
                            <td><center><strong>kode_barang</strong></center></td>
                            <td><center><strong>nama_barang</strong></center></td>
                            <td><center><strong>merk_barang</strong></center></td>
                            <td><center><strong>tahun_pembuatan</strong></center></td>
                            <td><center><strong>jumlah_barang</strong></center></td>
                            <td><center><strong>B</strong></center></td>
                            <td><center><strong>RR</strong></center></td>
                            <td><center><strong>RB</strong></center></td>
                            <td><center><strong>action</strong></center></td>
                            
                        </tr>
                    </thead>
                </table>
              </div>
@foreach($inventariss as $inventaris)
  <!-- Modal Detail Paket-->
      <div class="modal fade" id="ModalInventaris{{$inventaris->id_inventaris}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" value="">
          <div class="modal-dialog">
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
              <div class="panel panel-default">
                <div class="table-responsive">
                  <table class="table">
                    <tr bgcolor="#757475">
                      <th><h5 style="font-family:roboto; color:white;">Order Code</h5></th>
                      <th><h5 style="font-family:roboto; color:white;"></h5></th>
                    </tr>
                    <tr>
                      <th>Order Date</th>
                      <td align="left"></td>
                    </tr>
                    <tr>
                      <th>Name</th>
                      <td align="left"></td>
                    </tr>
                    <tr>
                      <th>Resto</th>
                      <td align="left"></td>
                    </tr>
                    <tr>
                      <th>Order Type</th>
                      <td align="left"></td>
                    </tr>
                    <tr>
                      <th>Detail</th>
                      <td align="left"></td>
                    </tr>
                    <tr>
                      <th>Total Price</th>
                      <th align="left">{</th>
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

