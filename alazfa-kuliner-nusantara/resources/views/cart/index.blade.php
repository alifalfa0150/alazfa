
<h1>Keranjang Belanja</h1>
<a href="/dashboard">Dashboard</a> | <a href="/menu">Lanjut Belanja</a>
<hr>
@if(session('success')) <div style="color:green; font-weight:bold;">{{ session('success') }}</div><br> @endif
@if(session('error')) <div style="color:red; font-weight:bold;">{{ session('error') }}</div><br> @endif

<table border="1" cellpadding="5">
    <tr><th>Menu</th><th>Toko</th><th>Harga Satuan</th><th>Jumlah</th><th>Total</th><th>Aksi</th></tr>
    @php $grandTotal = 0; @endphp
    @foreach($carts as $c)
    @php $total = $c->product->harga * $c->jumlah; $grandTotal += $total; @endphp
    <tr>
        <td>{{ $c->product->nama_produk }}</td>
        <td>{{ $c->product->store->nama_toko ?? '-' }}</td>
        <td>Rp {{ $c->product->harga }}</td>
        <td>
            <form method="POST" action="{{ route('cart.update', $c->id_keranjang) }}" style="display:inline;">
                @csrf @method('PUT')
                <input type="number" name="jumlah" value="{{ $c->jumlah }}" min="1" style="width:50px;">
                <button type="submit">Update</button>
            </form>
        </td>
        <td>Rp {{ $total }}</td>
        <td>
            <form method="POST" action="{{ route('cart.destroy', $c->id_keranjang) }}" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<h3>Grand Total: Rp {{ $grandTotal }}</h3>
<form method="POST" action="{{ route('orders.store') }}">
    @csrf
    <button type="submit" style="font-size:20px; font-weight:bold; background:yellow;">CHECKOUT SEKARANG</button>
</form>
