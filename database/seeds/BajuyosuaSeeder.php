<?php

use Illuminate\Database\Seeder;

class BajuyosuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
			'nama'=> 'Hotman',
			'alamat_pelanggan'=>'Jl. Rindu',
			'no_telp_pelanggan'=>'085298777162',
			'kode_pos_buyer'=>'4526'
		];
		
		DB::table('t_buyer')->insert($data);
		
		$data =[
			'nama'=> 'Rusman',
			'alamat_pelanggan'=>'Jl. Dilan',
			'no_telp_pelanggan'=>'0814636522',
			'kode_pos_buyer'=>'4006'
		];
		
		DB::table('t_buyer')->insert($data);
    }
}
