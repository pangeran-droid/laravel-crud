<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <title>Data Produk</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f9f9f9; color: #333; }
        h1 { color: #2c3e50; margin-bottom: 20px; }
        .btn { padding: 8px 14px; text-decoration: none; border-radius: 4px; display: inline-block; cursor: pointer; border: none; font-size: 14px; font-weight: bold; }
        .btn-primary { background-color: #3498db; color: white; margin-bottom: 15px; }
        .btn-primary:hover { background-color: #2980b9; }
        .btn-edit { background-color: #f1c40f; color: #333; }
        .btn-edit:hover { background-color: #d4ac0d; }
        .btn-delete { background-color: #e74c3c; color: white; }
        .btn-delete:hover { background-color: #c0392b; }
        .btn-secondary { background-color: #95a5a6; color: white; }
        .btn-secondary:hover { background-color: #7f8c8d; }
        table { width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); border-radius: 5px; overflow: hidden; }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #2c3e50; color: white; }
        tr:hover { background-color: #f1f1f1; }
        img { border-radius: 4px; object-fit: cover; }
        .text-muted { color: #999; font-style: italic; }
    </style>
</head>
<body>
    <h1>Data Produk</h1>
    
	@if ($message = Session::get('success'))
	  <div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		  <strong>{{ $message }}</strong>
	  </div>
	@endif

    <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk</a>
    <table>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr> 

        @foreach ( $produk as $item )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>
                @if($item->gambar)
                    <img src="{{ asset('uploads/images/' . $item->gambar) }}" alt="{{ $item->nama }}" style="width: 80px; height: 60px;">
                @else
                    <span class="text-muted">Tidak ada gambar</span>
                @endif
            </td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->deskripsi }}</td>
            <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
            <td>{{ $item->stok }}</td>
            <td>
                <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-edit">Edit</a>
                <form action="{{ route('produk.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <!-- Scripts -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>