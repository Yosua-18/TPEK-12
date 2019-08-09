@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Barang
        <small>Grosir Baju Yosua</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		@include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
			<a href="{{ url('kemeja_panjang/add')}}" class ="btn btn-success">
			<i class="fa fa-plus-circle"></i>Input Barang</a>
		</div>
          <div class="box-body">
            <table class="table table-stripped">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Kemeja</th>
					<th>Model Produk</th>
					<th>Warna</th>
					<th>Ukuran</th>
					<th>Stock</th>
				</tr>
			</thead>
			
			<tbody>
				@foreach ($result as $row)
				<tr>
					<td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
					<td>{{ $row->nama_kemeja_panjang }}</td>
					<td>{{ $row->model_produk }}</td>
					<td>{{ $row->color }}</td>
					<td>{{ $row->ukuran }}</td>
					<td>{{ $row->stock }}</td>
					<td>
						<a href="{{ url("kemeja_panjang/$row->id/edit") }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
						<form action="{{ url("kemeja_panjang/$row->id/delete") }}"
						method="POST" style="display:inline;">
						{{ csrf_field() }}
							{{ method_field('DELETE') }}
						<button class="btn btn-sm btn-danger"><i class="fa fa-trash">
						</i></a>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
          </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box-footer-->
      </section>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection