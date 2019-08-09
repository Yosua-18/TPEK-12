<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bajuyosua extends Model
{
    public $primaryKey = 'id';
	
	protected $table = 't_buyer';
	
	protected $fillable =[
	'nama','alamat_pelanggan','no_telp_pelanggan','kode_pos_buyer'
	];
}
