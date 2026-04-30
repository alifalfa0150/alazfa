
<h1>Detail Pesanan #{{ $order->id_pesanan }}</h1>
<a href="/orders">Kembali ke Riwayat</a>
<hr>
<p>Status: <strong>{{ strtoupper($order->status_pesanan) }}</strong></p>
<p>Toko: {{ $order->store->nama_toko ?? '-' }}</p>
<p>Kurir: {{ $order->kurir->name ?? 'Belum ada kurir' }}</p>

<h3>Item Pesanan:</h3>
<table border="1" cellpadding="5">
    <tr><th>Menu</th><th>Harga</th><th>Jumlah</th><th>Total</th></tr>
    @foreach($order->orderDetails as $d)
    <tr>
        <td>{{ $d->product->nama_produk }}</td>
        <td>Rp {{ $d->harga_satuan }}</td>
        <td>{{ $d->jumlah }}</td>
        <td>Rp {{ $d->harga_satuan * $d->jumlah }}</td>
    </tr>
    @endforeach
</table>
<h3>Total Bayar: Rp {{ $order->total_harga }}</h3>
