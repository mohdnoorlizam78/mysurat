@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{url('users')}}">Rekod Pengguna</a></li>
    <li class="breadcrumb-item active">Tambah rekod</li>
</ol>

<div class="card-body">
    <div class="row">
        <div class="col-md-12">
             
            <div class="box box-warning">
                
                <div class="box-body">
                
                    <form role="form" method="post" action="{{ url('users/store') }}" enctype="multipart/form-data">
                        @csrf
                    <div class="box-body">

                        <!-- <div class="form-group">
                            <label for="bil_suratmenyurat">Bilangan Surat</label>
                            <input id="bil_suratmenyurat" name="bil_suratmenyurat" type="text" class="form-control">
                        </div> -->
                        <div class="form-group">
                            <label for="name">Nama Pengguna</label>
                            <input id="name" name="name" type="text" class="form-control">
                        </div> 
                        <div class="form-group">
                            <label for="email">Emel</label>
                            <input id="email" name="email" type="text" class="form-control">
                        </div> 
                        <div class="form-group">
                            <label for="password">Katalaluan</label>
                            <input id="password" name="password" type="text" class="form-control">
                        </div> 
                        <div class="form-group">
                            <label for="confirm-password">Sahkan Katalaluan</label>
                            <input id="confirm-password" name="confirm-password" type="text" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="roles">Peranan
                                <span class="btn btn-info btn-xs select-all">Pilih semua</span>
                                <span class="btn btn-info btn-xs deselect-all">Batal semua</span></label>
                            <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
                                @foreach($roles as $id => $roles)
                                    <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                                @endforeach
                            </select>                
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