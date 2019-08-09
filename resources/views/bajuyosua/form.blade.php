@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
	  {{ empty ($result) ? 'Tambah' : 'Edit'}} Data Pelanggan
        <small>Grosir Baju Yosua</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Pelanggan</li>
		<li class="active">{{ empty ($result) ? 'Tambah' : 'Edit'}} Data Pelanggan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	@include('templates/feedback')
	<!-- Defaul box--->
	<div class="box">
        <div class="box-header with-border">
			<a href="{{ url('/')}}" class ="btn bg-purple">
			<i class="fa fa-chevron-left"></i>Kembali</a>
		</div>
          <div class="box-body">
            <form action="{{empty ($result) ? url ('bajuyosua/add') : url("bajuyosua/$result->
			id/edit")}}" class="form-horizontal" method="POST">
			
				{{ csrf_field() }}
				
				@if (!empty($result))
					{{ method_field('patch') }}
				@endif
			<div class="form-group">
				<label class="control-label col-sm-2">Nama</label>
				<div class="col-sm-10">
					<input type="text" name="nama"  class="form-control" placeholder="Masukan nama pelanggan" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">Alamat Pelanggan</label>
				<div class="col-sm-10">
					<input type="text" name="alamat_pelanggan"  class="form-control" placeholder="Masukan alamat pelanggan" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">No Telepon</label>
				<div class="col-sm-10">
					<input type="text" name="no_telp_pelanggan"  class="form-control" placeholder="Masukan nomor telepon pelanggan" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">Kode Pos</label>
				<div class="col-sm-10">
					<input type="text" name="kode_pos_buyer"  class="form-control" placeholder="Masukan kode pos" />
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
				</div>
			</div>
		</form>
		</div>
		<!-- /.box-body -->
		</div>
		<!--/.box-->
		
		</section>
		<!-- / .content-->
	@endsection
		