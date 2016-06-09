<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Kegiatan;
use App\User;
use App\Http\Requests;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Image;

class KegiatanController extends Controller
{
    public function index()
    {   
        $user = Auth::user();
        $kegiatan = Kegiatan::get();
        return view('kegiatan.index',compact('kegiatan','user'));
    }
    
    public function show($id)
    {
        $user = Auth::user();
        $kegiatan = Kegiatan::find($id);
        return view('kegiatan.show',compact('kegiatan','user'));

    }
    public function store(Request $request)
    {    
        $user = Auth::user();
        $kegiatan = Kegiatan::create([
            'user_id' => $user->id,
            'nama_kegiatan' =>  $request->get('nama_kegiatan'),
            'keterangan' =>  $request->get('keterangan'),
            'foto' => $request->get('foto'),
            ]);
        
        return redirect()->route('kegiatan.index');
        
    }

    public function destroy($id)
    {
        Kegiatan::find($id)->delete();
        #\Flash::success('Category deleted.');
        return redirect()->route('kegiatan.index');
    }

    
}
