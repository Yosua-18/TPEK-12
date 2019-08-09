<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BajuyosuaController extends Controller
{
    public function index()
	{
		$data['result'] = \App\Bajuyosua::all();
		return view('bajuyosua/index')->with($data);
	}
	
	public function create()
	{
		return view('bajuyosua/form');
	}
	public function store(Request $request)
	 {
		 $rules = [
			'nama' =>'required|max:100',
			'alamat_pelanggan' =>'required|max:100',
			'no_telp_pelanggan' =>'required|max:100',
			'kode_pos_buyer' =>'required|max:100',
		 ];
		 $this->validate($request, $rules);
		 
		 $input = $request->all();
		 $status = \App\Bajuyosua::create($input);
		 
		 if ($status) return redirect('/')->with('success', 'Berhasil menambahkan Pelanggan');
		 else return redirect('/')->with('error', 'Gagal menambahkan Pelanggan');
	 }
	 public function edit($id)
	 {
		 $data['result'] = \App\Bajuyosua::where('id', $id)->first();
		 return view('bajuyosua/form')->with($data);
	 }
	 public function update(Request $request, $id)
	 {
		 $rules = [
			'nama' =>'required|max:100',
			'alamat_pelanggan' =>'required|max:100',
			'no_telp_pelanggan' =>'required|max:100',
			'kode_pos_buyer' =>'required|max:100',
		 ];
		 $this->validate($request, $rules);
		 
		 $input = $request->all();
		 $result = \App\Bajuyosua::where('id', $id)->first();
		 $status = $result->update($input);
		 
		 if ($status) return redirect('/')->with('success', 'Data berhasil di ubah');
		 else return redirect('/')->with('error', 'Data gagal di ubah');
	 }
	 public function destroy(Request $request, $id)
	 {
		 $result = \App\Bajuyosua::where('id', $id)->first();
		 $status = $result->delete();
		 
		 if ($status) return redirect('/')->with('success', 'Data berhasil dihapus');
		 else return redirect('/')->with('error', 'Data gagal dihapus');
	 }
}
