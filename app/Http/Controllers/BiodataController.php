<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class BiodataController extends Controller
{
    public function index(Request $request)
    {
    	$no = 1;
    	$data = User::where('name', 'LIKE', '%'.$request->get('data').'%')
    		->where('id','>',1)
    		->paginate(5);
    	return view('biodata.index',compact('data','no'));
    }

    public function create()
    {
		return view('biodata.create');
    }

    public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|string|max:255|unique:users',
			'no_hp' => 'required|integer',
			'tgl_lahir' => 'required|date',
			'email' => 'required|string|max:255|unique:users',
		]);

		$user = User::create([
            'no_hp' => $request->get('no_hp'),
            'name' => $request->get('name'),
            'tgl_lahir' => $request->get('tgl_lahir'),
            'email' => $request->get('email'),

            //'password' => bcrypt($request->get('password')),
        	'role' => 'karyawan',
        ]);

		return redirect()->route('biodata.index');
	}

	public function edit($id)
	{
		$data = User::findOrFail($id);
		return view('biodata.edit',compact('data'));
	}

	public function show()
	{
		# code...
	}

    public function update(Request $request, $id)
	{	
		
		$user = User::findOrFail($id);
		$this->validate($request, [
			'name' => 'required|string|max:255',
			'no_hp' => 'required|numeric',
			'tgl_lahir' => 'required|date',
			'email' => 'required|string|max:255',
		]);

		$user->update($request->all());

		return redirect()->route('biodata.index');
	}

	public function destroy($id)
	{
		User::find($id)->delete();
		#\Flash::success('Category deleted.');
		return redirect()->route('biodata.index');
	}

	

}
