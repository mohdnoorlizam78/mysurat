<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DataTables;
use App\Models\SuratTerbukaTerhad;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class SuratTerbukaTerhadController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('suratterhad_index'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data_stt =  DB::table('suratterhad');
        //return view('suratterhad.index');
        
 
        return view('suratterhad.index', compact(         
            'data_stt'           
        ));
         
    }

    public function paparan(Request $request)
	{
        abort_if(Gate::denies('suratterhad_paparan'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //to use parameter or variable sent from ajax view
		$params = $request->params;	 
		$whereClause = $params['surat'];	 	 
		$query = DB::table('suratterhad')->orderBy('nombor', 'desc');
		
        /*
        $data = SuratTerbukaTerhad::get();
        if (request()->ajax()) {
            return datatables()->of($data)
                ->addColumn('tindakan', function ($data) {
                    $button = " <button class='edit btn  btn-primary ' id='" . $data->id . "' >Edit</button>";
                    //$button = " <a href={{ url('users/edit', $user->id)}} ><i style='color:orange' class='fas fa-pencil-alt'></i></a>";
                    $button .= " &nbsp;&nbsp;<button class='hapus btn  btn-danger' id='" . $data->id . "' >Hapus</button>";
                    return $button;
                })
                ->rawColumns(['tindakan'])
                ->make(true);
        }
        */
	 
		return DataTables::queryBuilder($query)->toJson();
	 
	}
    
    public function create()
    {
        abort_if(Gate::denies('suratterhad_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // $last_id=mysql_query("SELECT nombor FROM 'suratterhad' ORDER BY nombor DESC LIMIT 0 , 1" );
        // $row=mysql_fetch_assoc($last_id);
        //echo $row['id'];

        $row = SuratTerbukaTerhad::pluck('nombor')->last();

        $data_stt =  DB::table('suratterhad');
        return view('suratterhad.create', compact(         
            'data_stt',
            'row'          
        ));
         

    } 

    public function store(Request $request)
    {
        abort_if(Gate::denies('suratterhad_store'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //$data_stt = SuratTerbukaTerhad::create($request->all());
    //    $this->validate($request,[
            
    //     'bil_suratmenyurat'=>'required',           
    //     ]);
        //$data['bil_suratmenyurat'] = $request->bil_suratmenyurat;
        $data['nombor'] = $request->nombor;
        $data['tarikh_penerimaan'] = $request->tarikh_penerimaan;
        $data['no_fail_kementerian_ibu_pejabat'] = $request->no_fail_kementerian_ibu_pejabat;
        $data['nombor_yang_lain'] = $request->nombor_yang_lain;
        $data['tarikh_surat'] = $request->tarikh_surat;
        $data['daripada_siapa'] = $request->daripada_siapa;
        $data['perkara'] = $request->perkara;
        $data['dirujukkan_kepada'] = $request->dirujukkan_kepada;
        $data['catatan'] = $request->catatan;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
       

        SuratTerbukaTerhad::insert($data);
        //SuratTerbukaTerhad::create($request->all());

        return redirect()->route('suratterhad.index')->with('berjaya','Data berjaya ditambah.');
    }

    public function edit($id)
    {
        abort_if(Gate::denies('suratterhad_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        # code...
        // $id = $request->id;
        // $data = SuratTerbukaTerhad::find($id);
        // return response()->json(['data' => $data]);
        $data_stt =  SuratTerbukaTerhad::find($id);
        return view('suratterhad.edit',compact(
             'data_stt'
        ));

    }
    public function update(Request $request, $id)
    {
        abort_if(Gate::denies('suratterhad_update'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //abort_if(Gate::denies('asettakalih_update'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data['nombor'] = $request->nombor;
        $data['tarikh_penerimaan'] = $request->tarikh_penerimaan;
        $data['no_fail_kementerian_ibu_pejabat'] = $request->no_fail_kementerian_ibu_pejabat;
        $data['nombor_yang_lain'] = $request->nombor_yang_lain;
        $data['tarikh_surat'] = $request->tarikh_surat;
        $data['daripada_siapa'] = $request->daripada_siapa;
        $data['perkara'] = $request->perkara;
        $data['dirujukkan_kepada'] = $request->nama_pelapor_id;
        $data['catatan'] = $request->catatan;
        $data['updated_at'] = date('Y-m-d H:i:s');

        SuratTerbukaTerhad::where('id',$id)->update($data);

       //\Session::flash('kemaskini','Data telah dikemaskini');
 
        return redirect('suratterhad')->with('kemaskini','Data berjaya ditambah.');
    }

    public function delete($id)
    {
        abort_if(Gate::denies('suratterhad_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //abort_if(Gate::denies('asettakalih_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        SuratTerbukaTerhad::where('id', $id)->delete();

        \Session::flash('buang','Data berjaya dihapuskan');
        return redirect('suratterhad');
    }
}
