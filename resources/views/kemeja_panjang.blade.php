<h1> Tampilan Kemeja Panjang</h1>

@if (session('success'))
 <div class = "alert alert-danger">
    {{session('success')}}
  </div>
  @endif

  @if (session('success'))
 <div class = "alert alert-danger">
    {{session('error')}}
  </div>
  @endif


<a href = "{{ url('/kemeja_panjang/create') }}">Tambah Data Kemeja Panjang</a>
<table  border="10">
    <tr>
        <th>NO</th>
        <th>NAMA KEMEJA PANJANG</th>
        <th>MODEL PRODUK</th>
        <th>COLOR</th>
        <th>UKURAN</th>
        <th>STOCK</th>
        <th>AKSI</th> 
    </tr>
    @foreach ($kemeja_panjang as $row)
    <tr>
        <td>{{ isset($i) ? ++$i : $i = 1 }} </td>
        <td>{{ $row->nama_kemeja_panjang }}</td>
        <td>{{ $row->model_produk }}</td>
        <td>{{ $row->color }}</td>
        <td>{{ $row->ukuran }}</td>
        <td>{{ $row->stock }}</td>
        <td>
            <a href="{{ url('/kemeja_panjang/' . $row->id . '/edit') }}">Edit</a>
            |
            <form action="{{ url('/kemeja_panjang', $row->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form>
        </td>        
    </tr>
    @endforeach
</table>