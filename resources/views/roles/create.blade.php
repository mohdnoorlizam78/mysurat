@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{url('roles')}}">Rekod Peranan</a></li>
    <li class="breadcrumb-item active">Tambah rekod</li>
</ol>

<div class="card-body">
    <div class="row">
        <div class="col-md-12">
             
            <div class="box box-warning">
                
                <div class="box-body">
                
                    <form role="form" method="post" action="{{ url('roles/store') }}" enctype="multipart/form-data">
                        @csrf
                    <div class="box-body">

                        <!-- <div class="form-group">
                            <label for="bil_suratmenyurat">Bilangan Surat</label>
                            <input id="bil_suratmenyurat" name="bil_suratmenyurat" type="text" class="form-control">
                        </div> -->
                        <div class="form-group">
                            <label for="name">Nama Peranan</label>
                            <input id="name" name="name" type="text" class="form-control">
                        </div> 
                        
                        <div class="form-group">
                            <strong>Kebenaran:</strong>
                            <br/>
                            @foreach($permission as $value)
                                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                {{ $value->name }}</label>
                            <br/>
                            @endforeach
                        </div>
                        
                                        
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