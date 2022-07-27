@extends('layouts.master')
 
@section('content')

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>

<div class="container-fluid">

    <div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$data_stt->count()}} </h3>

                <p>Jumlah Surat Terbuka/Terhad</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ url('suratterhad') }}" class="small-box-footer">Maklumat lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>

            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$data_ss->count()}}</h3>

                <p>Jumlah Surat Sulit</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ url('suratsulit') }}" class="small-box-footer">Maklumat lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        <!-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Surat Terbuka/Terhad </span>
                        <span class="info-box-number"><h3 style="text-align:center">{{$data_stt->count()}}</h3></span>
                        <a  href="{{ url('suratterhad/create') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus-circle"></i> Rekod Baru</a>
                    </div> 
            </div>            
        </div>    -->

                    
    </div>

     <!-- <div class="card-body">
        <div class="col-md-12">
        testing
        </div>
     </div> -->
     <div class="card-body">
        <h2>Objektif Sistem Pengurusan Daftar Surat</h2>

        <ol>
        <li>Memberi kemudahan kepada pegawai berkenaan untuk membuat, menyimpan dan menyemak rekod dengan mudah.</li>
        <li>Memberi kemudahan kepada pegawai berkenaan untuk mencapai maklumat dengan cepat di dalam persekitaran rangkaian setempat.</li>
        <li>Dapat menjimatkan masa carian, ruang penyimpanan dan penggunaan kertas</li>
        </ol> 

        <h2>Ciri-ciri Sistem Pengurusan Daftar Surat</h2>

        <ol>
        <li>Merekod maklumat penerimaan surat masuk yang baru.</li>
        <li>Mencari dan memeriksa maklumat penerimaan surat masuk sedia ada.</li>
        <li>Boleh dipantau secara masa nyata oleh sesiapa sahaja mengikut kebenaran capaian</li>
        <li>Proses paparan data yang pantas.</li>
        <li>Laporan dapat dicetak, disimpan dalam format PDF dan Microsoft Office Excel</li>
        </ol> 
    </div>

</div>


      </div><!--/. container-fluid -->


      

@endsection