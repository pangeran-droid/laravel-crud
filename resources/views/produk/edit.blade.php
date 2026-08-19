<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f9f9f9; color: #333; }
        h1 { color: #2c3e50; margin-bottom: 20px; }
        .btn { padding: 8px 14px; text-decoration: none; border-radius: 4px; display: inline-block; cursor: pointer; border: none; font-size: 14px; font-weight: bold; }
        .btn-primary { background-color: #3498db; color: white; }
        .btn-primary:hover { background-color: #2980b9; }
        .btn-secondary { background-color: #95a5a6; color: white; }
        .btn-secondary:hover { background-color: #7f8c8d; }
        .form-container { background-color: #fff; padding: 25px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); max-width: 600px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="number"], textarea, input[type="file"] { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; font-family: Arial, sans-serif; }
        small { color: #666; font-style: italic; }
        .text-muted { color: #999; font-style: italic; }
        img { border-radius: 4px; object-fit: cover; margin-bottom: 8px; }
    </style>
</head>
<body>
    <h1>Edit Produk</h1>
    <div class="form-container">
        <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf 
            @method('PUT') 

            <div class="form-group">
                <label>Nama Produk:</label>
                <input type="text" name="nama" value="{{ $produk->nama }}" required>
            </div>
            
            <div class="form-group">
                <label>Deskripsi:</label>
                <textarea name="deskripsi" rows="3" required>{{ $produk->deskripsi }}</textarea>
            </div>
            
            <div class="form-group">
                <label>Harga:</label>
                <input type="number" name="harga" value="{{ $produk->harga }}" required>
            </div>
            
            <div class="form-group">
                <label>Stok:</label>
                <input type="number" name="stok" value="{{ $produk->stok }}" required>
            </div>

            <div class="form-group">
                <label>Gambar:</label>
                @if($produk->gambar)
                    <img src="{{ asset('uploads/images/' . $produk->gambar) }}" alt="{{ $produk->nama }}" style="width: 100px; height: 80px;"><br>
                @else
                    <span class="text-muted">Tidak ada gambar</span><br>
                @endif
                <input type="file" name="gambar">
                <small>Biarkan kosong jika tidak ingin mengubah gambar.</small>
            </div>
            
            <div style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary">Update Produk</button>
                <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>