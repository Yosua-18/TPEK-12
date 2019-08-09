@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
	  {{ empty ($result) ? 'Tambah' : 'Edit'}} Data Barang
        <small>Grosir Baju Yosua</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Input Barang</li>
		<li class="active">{{ empty ($result) ? 'Tambah' : 'Edit'}} Data Barang</li>
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
            <form action="{{empty ($result) ? url ('kemeja_panjang/add') : url("kemeja_panjang/$result->
			id/edit")}}" class="form-horizontal" method="POST">
			
				{{ csrf_field() }}
				
				@if (!empty($result))
					{{ method_field('patch') }}
				@endif
			<div class="form-group">
				<label class="control-label col-sm-2">Nama Kemeja</label>
				<div class="col-sm-10">
					<input type="text" name="nama_kemeja_panjang"  class="form-control" placeholder="Masukan nama Kemeja" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">Model Produk</label>
				<div class="col-sm-10">
					<input type="text" name="model_produk"  class="form-control" placeholder="Masukan Model" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">Warna</label>
				<div class="col-sm-10">
					<input type="text" name="color"  class="form-control" placeholder="Warna" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">Ukuran</label>
				<div class="col-sm-10">
					<input type="text" name="ukuran"  class="form-control" placeholder="Ukuran" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">Stock</label>
				<div class="col-sm-10">
					<input type="text" name="stock"  class="form-control" placeholder="Stock" />
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
		