<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\Survey;
use App\Galeriimage;
use Carbon\Carbon;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('galeri.index',compact('galeri'));
        // return view('galeri.index',compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galeri = \App\Galeri::all();

        $survey = Survey::select('id_survey', 'nama')->where('status', '=', '0')->get();

        return view('galeri.create', compact('galeri','survey'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
    		//'nik' => 'required',
            //'gambar_gerobak' => 'required',
            //'deskripsi' => 'required',
    	    //]);
 
         //Survey::create([
            //'nik' => $request->nik,
            //'gambar_gerobak' => $request->gambar_gerobak,
            //'deskripsi' => $request->deskripsi,
    	    //]);

            /* $nm = $request->gambar_gerobak;
            $item = time().rand(100,999).".".$nm->getClientOriginalName();
   
            $data = new Galeri;
            $data->nik = $request->nik;
            $data->deskripsi = $request->deskripsi;
            $data ->gambar_gerobak = $item;
   
            $nm->move(public_path().'/gambar',$item);
   
            $data->save(); */
            
            $message = ([
                'unique' => "ID Survey sudah terdata",
                'required' => "Data tidak boleh kosong!",
            ]); 

            $this->validate($request,[
                'id_survey' => 'required|unique:galeri,id_survey',
                'nama_usaha' => 'required',
                'nama_pemilik' => 'required',
                // 'gambar_gerobak' => 'required',
                'gambar_gerobak.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000',
                'deskripsi' => 'required'
            ]);

            $uniqID = Carbon::now()->timestamp . uniqid();

            $data = new Galeri;
            $data->id_survey    = $request->id_survey;
            $data->nama_usaha   = $request->nama_usaha;
            $data->nama_pemilik = $request->nama_pemilik;
            $data->unique_id    = $uniqID;
            $data->deskripsi    = $request->deskripsi;

            foreach($request->gambar_gerobak as $key => $image){
                $pimage = new Galeriimage();
                $pimage->galeri_unique_id = $uniqID;
    
                $imageNama = Carbon::now()->timestamp . $key . '.' . $request->gambar_gerobak[$key]->extension();
                $request->gambar_gerobak[$key]->move(public_path("images"), $imageNama);
    
                $pimage->image = $imageNama;
                $pimage->save();
            }
            
            $data->save();
            /* 
            if ($request->hasfile('gambar_gerobak')) { 
                $files = [];
                foreach ($request->file('gambar_gerobak') as $file) {
                    if ($file->isValid()) {
                        $gambar_gerobak = round(microtime(true) * 1000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                        $file->move(public_path('gambar'), $gambar_gerobak);                    
                        $files[] = [
                            'gambar_gerobak' => $gambar_gerobak,
                            'id_survey'           => $request->id_survey,
                            'deskripsi'     => $request->deskripsi
                        ];
                    }
                }
                Galeri::insert($files);  
                echo'Success';
            }else{
                echo'Gagal';
            } */

            
           return redirect()->route('galeri');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Galeri::where('id_survey',$id)->first();
        return view('galeri.edit',compact('galeri','survey'));
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
        Galeri::where('id_survey',$id)->update([
            'id_survey' => $request->id_survey,
            'nama_usaha' => $request->nama_usaha,
            'nama_pemilik' => $request->nama_pemilik,
            'gambar_gerobak' => $request->gambar_gerobak,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Survey::where('id_survey',$id)->delete();
        Galeri::where('id_survey',$id)->delete();
        return redirect()->route('galeri');
    }
}
