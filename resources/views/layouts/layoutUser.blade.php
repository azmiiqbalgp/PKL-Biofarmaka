<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('css/plugins/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    {{-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Styles -->


    <!-- navbar active class-->
    @php
    if (!function_exists('classActivePath')) {
        function classActivePath($path)
        {
            $path = explode('.', $path);
            $segment = 1;
            foreach($path as $p) {
                if((request()->segment($segment) == $p) == false) {
                    return '';
                }
                $segment++;
            }
            return ' active';
        }
    }
    @endphp
</style>
@yield('header')
</head>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">BIOFARMAKA</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="fa fa-fw fa-power-off"></i>Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            @if(Auth::user()->roles=='sarpras')
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="{!! classActivePath('user') !!}">
                        <a href="/user"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="{!! classActivePath('inventaris') !!}">
                        <a href="/inventaris"><i class="fa fa-fw fa-edit"></i> Inventaris Sarpras</a>
                    </li>
                    <li class="{!! classActivePath('tabelInventaris') !!}">
                        <a href="/tabelInventaris"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>

                </ul>
            </div>
            @elseif(Auth::user()->roles=='kebun')
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Inventaris Kebun</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                </ul>
            </div>
            @elseif(Auth::user()->roles=='kandang')
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Inventaris Kandang</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                </ul>
            </div>
            @elseif(Auth::user()->roles=='LAB')
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Inventaris LAB</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                </ul>
            </div>
            @endif
            <!-- /.navbar-collapse -->
        </nav>
        @yield('content')
            <!-- jQuery -->

</body>
<script src="{{asset('js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

{{-- <!-- Morris Charts JavaScript -->
<script src="{{asset('js/plugins/morris/raphael.min.js')}}"></script>
<script src="{{asset('js/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('js/plugins/morris/morris-data.js')}}"></script> --}}


<!--datatables-->
<script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
<script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>

<script>
    $(document).ready(function () {
        $('#logo').addClass('animated fadeInDown');
        $("input:text:visible:first").focus();
    });
    $('#username').focus(function() {
        $('label[for="username"]').addClass('selected');
    });
    $('#username').blur(function() {
        $('label[for="username"]').removeClass('selected');
    });
    $('#password').focus(function() {
        $('label[for="password"]').addClass('selected');
    });
    $('#password').blur(function() {
        $('label[for="password"]').removeClass('selected');
    });
</script>
{{-- <script src="//code.jquery.com/jquery.js"></script> --}}
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
$.fn.dataTable.ext.errMode = 'none';
</script>


<script type="text/javascript">
   $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'http://localhost:8000/tabelInventaris/get_datatable',
            columns: [
            {data: 'id_inventaris', name: 'id_inventaris', 'className': 'text-center'},
            {data: 'kode_barang', name: 'kode_barang', 'className': 'text-center'},
            {data: 'nama_barang', name: 'nama_barang', 'className': 'text-center'},
            {data: 'merk_barang', name: 'merk_barang', 'className': 'text-center'},
            {data: 'tahun_barang', name: 'tahun_barang', 'className': 'text-center'},
            {data: 'jumlah_barang', name: 'jumlah_barang', 'className': 'text-center'},
            {data: 'B', name: 'B', 'className': 'text-center'},
            {data: 'RR', name: 'RR', 'className': 'text-center'},
            {data: 'RB', name: 'RB', 'className': 'text-center'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
        });
    });

</script>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
<script>
            function tampilkanPreview(gambar,idpreview){
//                membuat objek gambar
                var gb = gambar.files;
                
//                loop untuk merender gambar
                for (var i = 0; i < gb.length; i++){
//                    bikin variabel
                    var gbPreview = gb[i];
                    var imageType = /image.*/;
                    var preview=document.getElementById(idpreview);            
                    var reader = new FileReader();
                    
                    if (gbPreview.type.match(imageType)) {
//                        jika tipe data sesuai
                        preview.file = gbPreview;
                        reader.onload = (function(element) { 
                            return function(e) { 
                                element.src = e.target.result; 
                            }; 
                        })(preview);
 
    //                    membaca data URL gambar
                        reader.readAsDataURL(gbPreview);
                    }else{
//                        jika tipe data tidak sesuai
                        alert("Type file tidak sesuai. Khusus image.");
                    }
                   
                }    
            }

</script>
<script>

    function calculate() {
    var myBox1 = document.getElementById('box1').value; 
    var myBox2 = document.getElementById('box2').value;
    var result = document.getElementById('result'); 
    var myResult = myBox1 * myBox2;
    result.innerHTML = myResult;

}
</script>

</html>
