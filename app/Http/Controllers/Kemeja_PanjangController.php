<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kemeja_PanjangController extends Controller
{
    //untuk melihat index/view
    public function index()
    {
    	$data['kemeja_panjang'] = \DB::table('t_kemeja_panjang')->get();
    	return view ('kemeja_panjang',$data);
    }

    //membuat/menambahkan data
    public function create()
    {
    	return view('kemeja_panjang.form');
    }

    public function store(request $request)
    {
    	//validasi
    	$rule = [
    		'nama_kemeja_panjang' =>'required|string',
    		'model_produk' =>'required|string',	
    		'color' =>'required',
    		'ukuran' =>'required',
    		'stock' =>'required',
		];
		$this->validate($request, $rule);

    	$input =$request ->all();
    	unset($input['_token']);
    	$status = \DB::table('t_kemeja_panjang')->insert($input);

    	if($status) {
    		return redirect('/kemeja_panjang')->with('success','Data Berhasil Ditambahkan');
		}else{
			return redirect('/kemeja_panjang/create')->with('error','Data Gagal Ditambahkan');
			}
    }

    //fungsi edit untuk mengubah
    public function edit(Request $request, $id)
    {
    	$data['kemeja_panjang'] = \DB::table('t_kemeja_panjang')->find($id);
    	return view('kemeja_panjang.form', $data);
    }

    //Fungsi Update atau menyimpan
     public function update(Request $request, $id)
    {	
    	//validasi
    	$rule = [
    		'nama_kemeja_panjang' =>'required|string',
    		'model_produk' =>'required|string',	
    		'color' =>'required',
    		'ukuran' =>'required',
    		'stock' =>'required',
		];
		$this->validate($request, $rule);

		$input = $request->all();
    	unset($input['_token']);
    	unset($input['_method']);

    	$status = \DB::table('t_kemeja_panjang')->where('id',$id)->update($input);

    	if ($status) {
    		return redirect('/kemeja_panjang')->with('success','Data Berhasil diubah');
    	}else{
    		return redirect('/kemeja_panjang/create')->with('error','Data Gagal diubah');
    	}
    }

    //Fungsi destroy (hapus)
    public function destroy(Request $request, $id){


    	$status = \DB::table('t_kemeja_panjang')->where('id',$id)->delete();

    	if ($status) {
    		return redirect('/kemeja_panjang')->with('success','Data Berhasil dihapus');
    	}else{
    		return redirect('/kemeja_panjang/create')->with('error','Data Gagal dihapus');
    	}

	}


}
