@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Rekod daftar surat terbuka/terhad</li>
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
            <span class="info-box-text">Jumlah Surat Terbuka/Terhad</span>
            <span class="info-box-number"><h3 style="text-align:center">{{$data_stt->count()}}</h3></span>
            <a  href="{{ url('suratterhad/create') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus-circle"></i> Tambah data</a>
            
            </div>
            <!-- /.info-box-content -->
        </div>
    <!-- /.info-box -->
    
    </div>
    
 
 
            <!-- /.card-header -->
            <div class="card-body">              
            
              <table id="emptableid" class="table table-bordered table-striped">
             
                <thead>
                <tr>
                    <!-- <th>Bil. Surat</th> -->
                    <th>Nombor</th>
                    <th>Tarikh Penerimaan</th>
                    <th>Perkara</th>
                    <th>No Fail Kementerian Ibu Pejabat</th>
                    <th>Nombor Yang Lain</th>
                    <th>Tarikh Surat</th>
                    <th>Daripada Siapa</th>
                    <th>Dirujukkan Kepada</th>
                    <th>Catatan</th>   
                    <th class="noExport">Tindakan</th>                          
                                                                                           
                </tr>
                      
                </thead>
                <tbody>
                
                </tbody>
                <tfoot>
                <!-- <tr>
                        <th>Nombor</th>
                        <th>Tarikh Penerimaan</th>
                        <th>Perkara</th>
                        <th>No Fail Kementerian Ibu Pejabat</th>
                        <th>Nombor Yang Lain</th>
                        <th>Tarikh Surat</th>
                        <th>Daripada Siapa</th>
                        <th>Dirujukkan Kepada</th>
                        <th>Catatan</th>
                              
                                                              
                          </tr> -->
                </tfoot>
              </table>
              <a  href="{{ url('suratterhad/create') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus-circle"></i> Tambah data</a>
          
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


<!-- Modal -->
<div class="modal fade" id="suratModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap">
                <input type="hidden" id="id" name="id">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No. Telpon</label>
                <input type="text" class="form-control" id="telp"  name="telp" placeholder="Masukkan Nomor Telpon">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
               <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="5"></textarea>
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" id="tutup" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" id="simpan" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>

@endsection