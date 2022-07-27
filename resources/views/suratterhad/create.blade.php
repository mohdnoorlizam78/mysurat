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
                
                <div class="box-body">
                
                    <form role="form" method="post" action="{{ url('suratterhad/store') }}" enctype="multipart/form-data">
                        @csrf
                    <div class="box-body">

                        <!-- <div class="form-group">
                            <label for="bil_suratmenyurat">Bilangan Surat</label>
                            <input id="bil_suratmenyurat" name="bil_suratmenyurat" type="text" class="form-control">
                        </div> -->
                        <div class="form-group">
                            <label for="nombor">Nombor</label>
                            <input id="nombor" name="nombor" type="text" value=" {{$row+1}}" class="form-control" readonly>
                        </div> 
                        <div class="form-group">
                            <label for="tarikh_penerimaan">Tarikh terima surat</label>                            
                            <input type="date" name="tarikh_penerimaan"  class="form-control">
                        </div> 
                        <div class="form-group">
                            <label for="no_fail_kementerian_ibu_pejabat">No Fail Kementerian Ibu Pejabat</label>
                            <input id="no_fail_kementerian_ibu_pejabat" name="no_fail_kementerian_ibu_pejabat" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nombor_yang_lain">Nombor Yang Lain</label>
                            <input id="nombor_yang_lain" name="nombor_yang_lain" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tarikh_surat">Tarikh Surat</label>                           
                            <input type="date" name="tarikh_surat"  class="form-control">
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
                            <label for="dirujukkan_kepada">Dirujukkan Kepada</label>
                            <input id="dirujukkan_kepada" name="dirujukkan_kepada" type="text" class="form-control">
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