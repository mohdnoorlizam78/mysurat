@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Rekod daftar surat sulit</li>
</ol>

@if ($message = Session::get('berjaya'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

 
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Jumlah Surat Sulit</span>
            <span class="info-box-number"><h3 style="text-align:center">{{$data_ss->count()}}</h3></span>
            <a  href="{{ url('suratsulit/create') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus-circle"></i> Tambah data</a>
            
            </div>
            <!-- /.info-box-content -->
        </div>
    <!-- /.info-box -->
    
    </div>
    
 
 
            <!-- /.card-header -->
            <div class="card-body">              
            
              <table id="sulitid" class="table table-bordered table-striped">
             
                <thead>
                <tr>
                    <!-- <th>Bil. Surat</th> -->
                    <th>Nombor</th>
                    <th>Tarikh Surat</th>
                    <th>Rujukan Surat</th>
                    <th>Perkara</th>
                    <th>Dikeluarkan oleh Kem/Jab</th>
                    <th>Pengelasan</th>
                    <th>Dikelaskan semula oleh</th>
                    <th>Tarikh</th>
                    <th>Tandatangan</th>
                    <th>Catatan</th>   
                    <th class="noExport">Tindakan</th>                          
                                                                                           
                </tr>
                      
                </thead>
                <tbody>
                
                </tbody>
                <tfoot>
               
                </tfoot>
              </table>
              <a  href="{{ url('suratsulit/create') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus-circle"></i> Tambah data</a>
          
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


@endsection