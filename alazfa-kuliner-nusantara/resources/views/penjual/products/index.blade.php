
<h1>Katalog Menu Toko</h1>
<a href="/penjual/dashboard">Dashboard</a>
<hr>
@if(session('success')) <div style="color:green; font-weight:bold;">{{ session('success') }}</div><br> @endif

<h3>Tambah Menu Baru:</h3>
<form method="POST" action="{{ route('penjual.products.store') }}" enctype="multipart/form-data">
    @csrf
    <input type="number" name="id_kategori" placeholder="ID Kategori (1/2/3)" required> <br><br>
    <input type="text" name="nama_produk" placeholder="Nama Menu" required> <br><br>
    <input type="number" name="harga" placeholder="Harga" required> <br><br>
    <input type="number" name="stok" placeholder="Stok" required> <br><br>
    <textarea name="deskripsi_produk" placeholder="Deskripsi"></textarea> <br><br>
    <button type="submit">Simpan Produk</button>
</form>
<br>

<table border="1" cellpadding="5">
    <tr><th>Menu</th><th>Harga</th><th>Stok</th><th>Kategori</th><th>Aksi</th></tr>
    @foreach($products as $p)
    <tr>
        <td>{{ $p->nama_produk }}</td>
        <td>Rp {{ $p->harga }}</td>
        <td>{{ $p->stok }}</td>
        <td>{{ $p->category->nama_kategori ?? '-' }}</td>
        <td>
            <form method="POST" action="{{ route('penjual.products.destroy', $p->id_produk) }}" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
