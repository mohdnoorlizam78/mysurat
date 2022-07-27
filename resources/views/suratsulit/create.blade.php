@extends('layouts.master')
 
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{url('suratsulit')}}">Rekod Daftar Surat</a></li>
    <li class="breadcrumb-item active">Tambah rekod</li>
</ol>

<div class="card-body">
    <div class="row">
        <div class="col-md-12">
             
            <div class="box box-warning">
                
                <div class="box-body">
                
                    <form role="form" method="post" action="{{ url('suratsulit/store') }}" enctype="multipart/form-data">
                        @csrf
                    <div class="box-body">

                        
                        <div class="form-group">
                            <label for="nombor">Nombor</label>
                            <input id="nombor" name="nombor" type="text" value=" {{$row+1}}" class="form-control" readonly>
                        </div> 
                        <div class="form-group">
                            <label for="tarikh_surat">Tarikh surat</label>                            
                            <input type="date" name="tarikh_surat"  class="form-control">
                        </div> 
                        <div class="form-group">
                            <label for="rujukan_surat">Rujukan surat</label>
                            <input id="rujukan_surat" name="rujukan_surat" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="perkara">Perkara</label>
                            <input id="perkara" name="perkara" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dikeluarkan_oleh_kemjab">Dikeluarkan oleh kementerian/jabatan</label>                           
                            <input type="text" name="dikeluarkan_oleh_kemjab"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="daripada_siapa">Daripada Siapa</label>
                            <input id="daripada_siapa" name="daripada_siapa" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="perkara">Perkara</label>
                            <input id="perkara" name="perkara" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pengelasan">Pengelasan</label>
                            <input id="pengelasan" name="pengelasan" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dikelaskan_semula_oleh">Dikelaskan semula oleh</label>
                            <input id="dikelaskan_semula_oleh" name="dikelaskan_semula_oleh" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tarikh">Dikelaskan semula oleh</label>
                            <input id="tarikh" name="tarikh" type="date" class="form-control">
                        </div>
                        <div class="form-group">
                             
                            <input id="tandatangan" name="tandatangan" type="hidden" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="catatan">Catatan</label>
                            <input id="catatan" name="catatan" type="text" class="form-control">
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