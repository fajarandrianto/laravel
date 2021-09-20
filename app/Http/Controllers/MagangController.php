<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\magang;

class MagangController extends Controller{

    public function index(Request $request){
    	$data = magang::paginate();
        return view('magang.magang',compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:App\magang,nis',
            'nama' => 'required',
            'jurusan' => 'required',
            'asal_sekolah' => 'required',
            'jenis_kelamin' => 'required',
            'telp_siswa' => 'required',
            'napem' => 'required',
            'telp_pem' => 'required',
            'mulai' => 'required',
            'akhir' => 'required',
            'divisi' => 'required',
            ], [
                'nis.required' => 'NIS perlu di isi!!',
                'nama.required' => 'Nama perlu di isi!!',
                'jurusan.required' => 'Jurusan perlu di isi!!',
                'asal_sekolah.required' => 'Asal sekolah perlu di isi!!',
                'jenis_kelamin.required' => 'Jenis Kelamin perlu di isi!!',
                'telp_siswa.required' => 'Telpon siswa perlu di isi!!',
                'napem.required' => 'Nama pembimbing perlu di isi!!',
                'telp_pem.required' => 'Telpon pembimbing perlu di isi!!',
                'mulai.required' => 'Mulai magang perlu di isi!!',
                'akhir.required' => 'Akhir magang perlu di isi!!',
                'divisi.required' => 'Divisi perlu di isi!!',
                
            ]);
            magang::create($request->all());
            return redirect()->back();
    
        return back()->with('success', 'magang created successfully.');
    }

 public function destroy($id){
    magang::find($id)->delete();
    return redirect()->back();
    }
    
   public function edit($id){ 
    $magang =magang::find($id);
	return view('magang.edit',['magang'=>$magang]);
   }

    function showData($id){
      $data= magang::find($id);
      return view('magang.edit',['data'=>$data]);
    }

    function update(Request $req) {
      $data= magang::find($req->id);
      $data->nis=$req->nis;
      $data->nama=$req->nama;
      $data->jurusan=$req->jurusan;
      $data->asal_sekolah=$req->asal_sekolah;
      $data->jenis_kelamin=$req->jenis_kelamin;
      $data->telp_siswa=$req->telp_siswa;
      $data->napem=$req->napem;
      $data->telp_pem=$req->telp_pem;
      $data->mulai=$req->mulai;
      $data->akhir=$req->akhir;
      $data->divisi=$req->divisi;
      $data->save();
      return redirect('magang');
    }
    public function table(){
        $magang = magang::all();
        return view('magang.magang', compact('magang'));
    }
    public function formulir(){
        $magang = magang::all();
        return view('magang.formulir', compact('magang'));
    }
}