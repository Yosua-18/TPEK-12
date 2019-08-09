<h1> Tampilan Buyer</h1>

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



<a href = "{{ url('/buyer/create') }}">Tambah Data Buyer</a>
<table  border="10">
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>ALAMAT PELANGGAN</th>
        <th>NO TELP PELANGGAN</th>
        <th>KODE POS BUYER</th>
        <th>AKSI</th> 
    </tr>
    @foreach ($buyer as $row)
    <tr>
        <td>{{ isset($i) ? ++$i : $i = 1 }} </td>
        <td>{{ $row->nama }}</td>
        <td>{{ $row->alamat_pelanggan }}</td>
        <td>{{ $row->no_telp_pelanggan }}</td>
        <td>{{ $row->kode_pos_buyer }}</td>
        <td>
            <a href="{{ url('/buyer/' . $row->id . '/edit') }}">Edit</a>
            |
            <form action="{{ url('/buyer', $row->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form>
        </td>        
    </tr>
    @endforeach
</table>