
<h1>Katalog Menu</h1>
<a href="/">Kembali</a> | <a href="/cart">Lihat Keranjang</a>
<hr>
@if(session('success')) <div style="color:green; font-weight:bold;">{{ session('success') }}</div><br> @endif
<table border="1" cellpadding="5">
    <tr><th>Menu</th><th>Toko</th><th>Harga</th><th>Aksi</th></tr>
    @foreach($products as $p)
    <tr>
        <td>{{ $p->nama_produk }}</td>
        <td>{{ $p->store->nama_toko ?? '-' }}</td>
        <td>Rp {{ $p->harga }}</td>
        <td>
            <form method="POST" action="{{ route('cart.store') }}" style="display:inline;">
                @csrf
                <input type="hidden" name="id_produk" value="{{ $p->id_produk }}">
                <input type="number" name="jumlah" value="1" min="1" style="width:50px;">
                <button type="submit">+ Keranjang</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
