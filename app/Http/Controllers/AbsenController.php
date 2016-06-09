<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absen;
use App\User;
use Auth;
use App\Http\Requests;

class AbsenController extends Controller
{
    public function index()
    {	
    	$user = Auth::user();
    	$masuk = Absen::where('jenis_absen','=','masuk')->get();
    	$keluar = Absen::where('jenis_absen','=','keluar')->get();
    	return view('absen.index',compact('masuk','keluar','user'));
    }

    public function store(Request $request)
    {    
		$user = Auth::user();
		$absen = Absen::create([
			'user_id' => $user->id,
			'jenis_absen' =>  $request->get('jenis_absen'),
			]);

		return redirect()->route('absen.index');
	
    }

    public function show($id)
    {
    	$user = Auth::user();
    	$absen = Absen::find($id);
    	return view('absen.show',compact('absen','user'));
    }

    public function destroy($id)
	{
		Absen::find($id)->delete();
		#\Flash::success('Category deleted.');
		return redirect()->route('absen.index');
	}

}
