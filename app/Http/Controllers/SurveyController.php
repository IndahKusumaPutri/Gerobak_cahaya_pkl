<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\Pemohon;
use App\Surveyimage;
use Carbon\Carbon;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $survey = Survey::paginate(5);
        return view('survey.index', compact('survey'));
    }

    public function cetakDataSurvey()
    {
        $cetakDataSurvey = Survey::all();
        return view('survey.cetak-data-survey',compact('cetakDataSurvey'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $survey = \App\Survey::all();
        //$pemohon = Pemohon::all();
        $pemohon = Pemohon::select('nik', 'nama')->where('status', '=', '1')->get();

        return view('survey.create', compact('survey','pemohon'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = ([
            'unique' => "NIK sudah terdata",
            'required' => "Data tidak boleh kosong!",
            'numeric' => "Harus berupa angka!",
            'min' => "Minimal 16 Angka!"
        ]); 

        $this->validate($request,[
    		'nik' => 'required|unique:survey,nik',
            'nama' => 'required',
            'nama_pensurvey' => 'required',
            'foto.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000|required'
    	    ], $message);
 
         //Survey::create([
            //'nik' => $request->nik,
            //'nama' => 'nama',
            //'nama_pensurvey' => $request->nama_pensurvey,
            //'foto' => $request->foto,
    	    //]);

        /*  $nm = $request->foto;
         $nm = $request->foto2;
         $nm = $request->foto3;
         $nm = $request->foto4;
         $nm = $request->foto5;
         $item = time().rand(100,999).".".$nm->getClientOriginalName();

         $data = new Survey;
         $data->nik = $request->nik;
         $data->nama= $request->nama;
         $data->nama_pensurvey = $request->nama_pensurvey;
         $data -> foto = $item;
         $data -> foto2 = $item;
         $data -> foto3 = $item;
         $data -> foto4 = $item;
         $data -> foto5 = $item;

         $nm->move(public_path().'/gambar',$item);

         $data->save(); */

         
        $uniqID = Carbon::now()->timestamp . uniqid();

        $data = new Survey;
        $data->nik = $request->nik;
        $data->unique_id    = $uniqID;
        $data->nama= $request->nama;
        $data->nama_pensurvey = $request->nama_pensurvey;
        
        foreach($request->foto as $key => $image){
            $pimage = new Surveyimage();
            $pimage->survey_unique_id = $uniqID;

            $imageNama = Carbon::now()->timestamp . $key . '.' . $request->foto[$key]->extension();
            $request->foto[$key]->move(public_path("images"), $imageNama);

            $pimage->image = $imageNama;
            $pimage->save();
        }
        
        $data->save();
        return redirect()->route('survey')->with('Data ditambah','Data berhasil ditambah!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $survey = Survey::where('nik',$id)->first();
        return view('survey.show', compact('survey'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Survey::where('nik',$id)->delete();

        return redirect()->route('survey')->with('Data dihapus','Data berhasil dihapus!');
    }

    public function status($id)
    {
        $survey = Survey::where('nik',$id)->first();

        $status_sekarang = $survey->status;

        If($status_sekarang == 1){
            Survey::where('nik',$id)->update([
                'status'=>0
            ]);
        }else{
            Survey::where('nik',$id)->update([
                'status'=>1
            ]);
        }
        \Session::flash('sukses','Status berhasil diubah');
        
         return redirect()->route('survey')->with('Data diubah','Data berhasil diubah!');
    }
}
