<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    //untuk melihat index/view
    public function buyer()
    {
    	$data['buyer'] = \DB::table('t_buyer')->get();
    	return view ('buyer',$data);
    }

    //untuk membuat data 
    public function create()
    {
    	return view('buyer.form');
    }

    public function store(request $request)
    {
    	$rule = [
    		'nama' =>'required|string',
    		'alamat_pelanggan' =>'required|string',	
    		'no_telp_pelanggan' =>'required',
    		'kode_pos_buyer' =>'required',
		];
		$this->validate($request, $rule);

    	$input = $request->all();
    	unset($input['_token']);
    	$status = \DB::table('t_buyer')->insert($input);

    	if($status) {
    		return redirect('/buyer')->with('success','Data Berhasil Ditambahkan');
		}else{
			return redirect('/buyer/create')->with('error','Data Gagal Ditambahkan');
			}
    }

    //fungsi edit untuk mengubah
    public function edit(Request $request, $id)
    {
    	$data['buyer'] = \DB::table('t_buyer')->find($id);
    	return view('buyer.form', $data);
    }

    //Fungsi Update atau menyimpan
     public function update(Request $request, $id)
    {	
    	$rule = [
    		'nama' =>'required|string',
    		'alamat_pelanggan' =>'required|string',	
    		'no_telp_pelanggan' =>'required',
    		'kode_pos_buyer' =>'required',
		];
		$this->validate($request, $rule);

		$input = $request->all();
    	unset($input['_token']);
    	unset($input['_method']);

    	$status = \DB::table('t_buyer')->where('id',$id)->update($input);

    	if ($status) {
    		return redirect('/buyer')->with('success','Data Berhasil diubah');
    	}else{
    		return redirect('/buyer/create')->with('error','Data Gagal diubah');
    	}
    }

    //Fungsi destroy (hapus)
    public function destroy(Request $request, $id){


    	$status = \DB::table('t_buyer')->where('id',$id)->delete();

    	if ($status) {
    		return redirect('/buyer')->with('success','Data Berhasil dihapus');
    	}else{
    		return redirect('/buyer/create')->with('error','Data Gagal dihapus');
    	}

	}

}


