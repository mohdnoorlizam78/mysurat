@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{url('suratterhad')}}">Rekod Daftar Surat</a></li>
    <li class="breadcrumb-item active">Tambah rekod</li>
</ol>
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
             
            <div class="box box-warning">
                <div class="box-header">
                    <p>
                        <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    </p>
                </div>
                <div class="box-body">
                
                    <form role="form" method="post" action="{{ url('suratterhad/add') }}" enctype="multipart/form-data">
                        @csrf
                    <div class="box-body">

                                        
                    </div>
                    <!-- /.box-body -->
        
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Hantar</button>
                        <button type="reset" class="btn btn-warning">Reset</button> 
                    </div>
                    </form>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 

 