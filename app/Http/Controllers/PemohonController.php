<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemohon;
use App\Survey;
use App\Pemohonimage;
use Carbon\Carbon;

class PemohonController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemohon = Pemohon::paginate(5);
        return view('pemohon.index',compact('pemohon'));
    }

    public function cetakPemohon()
    {
        $cetakPemohon = Pemohon::all();
        return view('pemohon.cetak-pemohon',compact('cetakPemohon'));
    }

    public function cetakForm()
    {
        return view('pemohon.cetak-pemohon-form');
    }

    public function cetakPemohonPertanggal($tglawal, $tglakhir)
    {
        // dd(["Tanggal Awal : ".$tglawal, "Tanggal Akhir : ".$tglakhir]);
        $cetakPertanggal = Pemohon::whereBetween('survey', [$tglawal, $tglakhir])->get();
        return view('pemohon.cetak-pemohon-pertanggal', compact('cetakPertanggal'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pemohon.create');
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
    		'nik' => 'required|numeric|min:16|unique:pemohon,nik',
            'nama' => 'required',
            'jenkel' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'no_kk' => 'required|numeric|min:16',
            'telp' => 'required|numeric|min:13',
            'sps' => 'required',
            'jps' => 'required|numeric',
            'rencana_usaha' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'provinsi'=> 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'jenis_usaha' => 'required',
            'foto.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000|required'/* ,
            'foto2.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000|required',
            'foto3.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000|required',
            'foto4.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000|required',
            'foto5.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000|required' */
        ], $message);
 
        //  Pemohon::create([
        //     'nik' => $request->nik,
    	// 	'nama' => $request->nama,
        //     'jenkel' => $request->jenkel,
        //     'tempat_lahir' => $request->tempat_lahir,
        //     'tanggal_lahir' => $request->tanggal_lahir,
        //     'no_kk' => $request->no_kk,
        //     'telp' => $request->telp,
        //     'sps' => $request-> sps,
        //     'jps' => $request->jps,
        //     'rencana_usaha' => $request->rencana_usaha,
        //     'email' => $request->email,
    	// 	'alamat' => $request->alamat,
        //     'provinsi' => $request->provinsi,
        //     'kabupaten' => $request->kabupaten,
        //     'kecamatan' => $request->kecamatan,
        //     'kelurahan' => $request->kelurahan,
        //     'jenis_usaha' => $request->jenis_usaha,
        //     'foto' => $request->foto
    	//  ]);

         /* $nm = $request->foto;
         $nm = $request->foto2;
         $nm = $request->foto3;
         $nm = $request->foto4;
         $nm = $request->foto5;
         $item = time().rand(100,999).".".$nm->getClientOriginalName();
         
         $data = new Pemohon;
         $data->nik = $request->nik;
         $data->nama = $request->nama;
         $data->jenkel = $request->jenkel;
         $data ->tempat_lahir = $request->tempat_lahir;
         $data ->tanggal_lahir = $request->tanggal_lahir;
         $data -> no_kk = $request->no_kk;
         $data -> telp = $request->telp;
         $data -> sps = $request-> sps;
         $data -> jps = $request->jps;
         $data -> rencana_usaha = $request->rencana_usaha;
         $data -> email = $request->email;
         $data -> alamat = $request->alamat;
         $data -> provinsi = $request->provinsi;
         $data -> kabupaten = $request->kabupaten;
         $data -> kecamatan = $request->kecamatan;
         $data -> kelurahan = $request->kelurahan;
         $data -> jenis_usaha = $request->jenis_usaha;
         $data -> foto = $item;
         $data -> foto2 = $item;
         $data -> foto3 = $item;
         $data -> foto4 = $item;
         $data -> foto5 = $item;


         $nm->move(public_path().'/gambar',$item);

         $data->save(); */

        $uniqID = Carbon::now()->timestamp . uniqid();

        $data = new pemohon();
        $data->nik = $request->nik;
        $data->unique_id    = $uniqID;
        $data->nama = $request->nama;
        $data->jenkel = $request->jenkel;
        $data ->tempat_lahir = $request->tempat_lahir;
        $data ->tanggal_lahir = $request->tanggal_lahir;
        $data -> no_kk = $request->no_kk;
        $data -> telp = $request->telp;
        $data -> sps = $request-> sps;
        $data -> jps = $request->jps;
        $data -> rencana_usaha = $request->rencana_usaha;
        $data -> email = $request->email;
        $data -> alamat = $request->alamat;
        $data -> provinsi = $request->provinsi;
        $data -> kabupaten = $request->kabupaten;
        $data -> kecamatan = $request->kecamatan;
        $data -> kelurahan = $request->kelurahan;
        $data -> jenis_usaha = $request->jenis_usaha;
        
        foreach($request->foto as $key => $image){
            $pimage = new Pemohonimage();
            $pimage->pemohon_unique_id = $uniqID;

            $imageNama = Carbon::now()->timestamp . $key . '.' . $request->foto[$key]->extension();
            $request->foto[$key]->move(public_path("images"), $imageNama);

            $pimage->image = $imageNama;
            $pimage->save();
        }

        $data->save();
        return redirect()->route('pemohon')->with('Data ditambah','Data berhasil ditambah!');

    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pemohon = Pemohon::where('nik',$id)->first();
        return view('pemohon.show', compact('pemohon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemohon = Pemohon::where('nik',$id)->first(); 
        return view('pemohon.edit', compact('pemohon'));
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
        $pemohon = Pemohon::where('nik',$id)->first();

        $message = ([
            'unique' => "NIK sudah terdata",
            'required' => "Data tidak boleh kosong!",
            'numeric' => "Harus berupa angka!",
            'min' => "Minimal 16 Angka!"
        ]);

       $this->validate($request,[
    		'nik' => 'required|numeric|min:16|unique:pemohon,nik',
            'nama' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            // 'no_kk' => 'required|numeric|min:16',
            // 'telp' => 'required|numeric|min:13',
            // 'sps' => 'required',
            // 'jps' => 'required|numeric',
            // 'rencana_usaha' => 'required',
            // 'email' => 'required',
            // 'alamat' => 'required',
            // 'provinsi'=> 'required',
            // 'kabupaten' => 'required',
            // 'kecamatan' => 'required',
            // 'kelurahan' => 'required',
            // 'jenis_usaha' => 'required',
            // 'foto.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000|required'
        ], $message);

        $uniqID = Carbon::now()->timestamp . uniqid();

        $data = new pemohon();
        $data->nik = $request->nik;
        $data->unique_id    = $uniqID;
        $data->nama = $request->nama;
        $data->jenkel = $request->jenkel;
        $data->alamat = $request->alamat;
        $data ->tempat_lahir = $request->tempat_lahir;
        $data ->tanggal_lahir = $request->tanggal_lahir;
        // $data -> no_kk = $request->no_kk;
        // $data -> telp = $request->telp;
        // $data -> sps = $request-> sps;
        // $data -> jps = $request->jps;
        // $data -> rencana_usaha = $request->rencana_usaha;
        // $data -> email = $request->email;
        // $data -> alamat = $request->alamat;
        // $data -> provinsi = $request->provinsi;
        // $data -> kabupaten = $request->kabupaten;
        // $data -> kecamatan = $request->kecamatan;
        // $data -> kelurahan = $request->kelurahan;
        // $data -> jenis_usaha = $request->jenis_usaha;
        
        foreach($request->foto as $key => $image){
            $pimage = new Pemohonimage();
            $pimage->pemohon_unique_id = $uniqID;

            $imageNama = Carbon::now()->timestamp . $key . '.' . $request->foto[$key]->extension();
            $request->foto[$key]->move(public_path("images"), $imageNama);

            $pimage->image = $imageNama;
            $pimage->save();
        }

        $data->save();
        return redirect()->route('pemohon')->with('Data ditambah','Data berhasil ditambah!');
    
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
        Pemohon::where('nik',$id)->delete();
        return redirect()->route('pemohon')->with('Data dihapus','Data berhasil dihapus!');
    }

    public function status($id)
    {
        $pemohon = Pemohon::where('nik',$id)->first();

        $status_sekarang = $pemohon->status;

        If($status_sekarang == 1){
            Pemohon::where('nik',$id)->update([
                'status'=>0
            ]);
        }else{
            Pemohon::where('nik',$id)->update([
                'status'=>1
            ]);
        }
         with('sukses','Status berhasil diubah');
        
         return redirect()->route('pemohon')->with('Data diubah','Data berhasil diubah!');
    }

    // public function cetakPemohon()
    // {
    //     return view('pemohon.cetakpemohon');
    // }
}