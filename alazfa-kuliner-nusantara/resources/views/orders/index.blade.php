
<h1>Riwayat Pesanan Pelanggan</h1>
<a href="/dashboard">Dashboard</a>
<hr>
@if(session('success')) <div style="color:green; font-weight:bold;">{{ session('success') }}</div><br> @endif
<table border="1" cellpadding="5">
    <tr><th>ID Pesanan</th><th>Toko</th><th>Total Harga</th><th>Status</th><th>Tanggal</th><th>Aksi</th></tr>
    @foreach($orders as $o)
    <tr>
        <td>#{{ $o->id_pesanan }}</td>
        <td>{{ $o->store->nama_toko ?? '-' }}</td>
        <td>Rp {{ $o->total_harga }}</td>
        <td><strong>{{ strtoupper($o->status_pesanan) }}</strong></td>
        <td>{{ $o->created_at }}</td>
        <td>
            <a href="{{ route('orders.show', $o->id_pesanan) }}">Detail</a>
        </td>
    </tr>
    @endforeach
</table>
