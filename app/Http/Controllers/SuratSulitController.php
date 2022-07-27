<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratSulit;
use DB;
use DataTables;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class SuratSulitController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('suratsulit_index'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data_ss =  DB::table('suratsulit');
        //return view('suratterhad.index');
        
 
        return view('suratsulit.index', compact(         
            'data_ss'           
        ));
         
    }
    public function paparan(Request $request)
	{
		abort_if(Gate::denies('suratsulit_index'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //to use parameter or variable sent from ajax view
		$params = $request->params;	 
		$whereClause = $params['surat'];	 	 
		$query = DB::table('suratsulit')->orderBy('id', 'desc');
		
       	 
		return DataTables::queryBuilder($query)->toJson();
	 
	}

    public function create()
    {
        abort_if(Gate::denies('suratsulit_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // $last_id=mysql_query("SELECT nombor FROM 'suratterhad' ORDER BY nombor DESC LIMIT 0 , 1" );
        // $row=mysql_fetch_assoc($last_id);
        //echo $row['id'];

        $row = SuratSulit::pluck('nombor')->last();

        $data_stt =  DB::table('suratsulit');
        return view('suratsulit.create', compact(         
            'data_stt',
            'row'          
        ));
         

    } 

    public function store(Request $request)
    {
        abort_if(Gate::denies('suratsulit_store'), Response::HTTP_FORBIDDEN, '403 Forbidden');
       
        $data['nombor'] = $request->nombor;
        $data['tarikh_surat'] = $request->tarikh_surat;
        $data['rujukan_surat'] = $request->rujukan_surat;
        $data['perkara'] = $request->perkara;
        $data['dikeluarkan_oleh_kemjab'] = $request->dikeluarkan_oleh_kemjab;
        $data['pengelasan'] = $request->pengelasan;
        $data['dikelaskan_semula_oleh'] = $request->dikelaskan_semula_oleh;
        $data['tarikh'] = $request->tarikh;
        $data['tandatangan'] = $request->tandatangan;
        $data['catatan'] = $request->catatan;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
       

        SuratSulit::insert($data);
        //SuratTerbukaTerhad::create($request->all());

        return redirect()->route('suratsulit.index')->with('berjaya','Data berjaya ditambah.');
    }

    public function edit($id)
    {
        abort_if(Gate::denies('suratsulit_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
       
        $data_stt =  SuratSulit::find($id);
        return view('suratsulit.edit',compact(
             'data_stt'
        ));

    }
    public function update(Request $request, $id)
    {
        abort_if(Gate::denies('suratsulit_update'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        $data['nombor'] = $request->nombor;
        $data['tarikh_surat'] = $request->tarikh_surat;
        $data['rujukan_surat'] = $request->rujukan_surat;
        $data['perkara'] = $request->perkara;
        $data['dikeluarkan_oleh_kemjab'] = $request->dikeluarkan_oleh_kemjab;
        $data['pengelasan'] = $request->pengelasan;
        $data['dikelaskan_semula_oleh'] = $request->dikelaskan_semula_oleh;
        $data['tarikh'] = $request->tarikh;
        $data['tandatangan'] = $request->tandatangan;
        $data['catatan'] = $request->catatan;
        $data['updated_at'] = date('Y-m-d H:i:s');

        SuratSulit::where('id',$id)->update($data);

       //\Session::flash('kemaskini','Data telah dikemaskini');
 
        return redirect('suratsulit')->with('kemaskini','Data berjaya ditambah.');
    }

    public function delete($id)
    {
        abort_if(Gate::denies('suratsulit_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //abort_if(Gate::denies('asettakalih_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        SuratSulit::where('id', $id)->delete();

        \Session::flash('buang','Data berjaya dihapuskan');
        return redirect('suratsulit');
    }
}
    

