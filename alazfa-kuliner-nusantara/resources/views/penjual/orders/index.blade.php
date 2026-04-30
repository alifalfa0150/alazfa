
<h1>Pesanan Masuk</h1>
<a href="/penjual/dashboard">Dashboard</a>
<hr>
@if(session('success')) <div style="color:green; font-weight:bold;">{{ session('success') }}</div><br> @endif

<table border="1" cellpadding="5">
    <tr><th>ID Pesanan</th><th>Pelanggan</th><th>Total Bayar</th><th>Status Saat Ini</th><th>Ubah Status</th></tr>
    @foreach($orders as $o)
    <tr>
        <td>#{{ $o->id_pesanan }}</td>
        <td>{{ $o->user->name ?? '-' }}</td>
        <td>Rp {{ $o->total_harga }}</td>
        <td><strong>{{ strtoupper($o->status_pesanan) }}</strong></td>
        <td>
            <form method="POST" action="{{ route('penjual.orders.status', $o->id_pesanan) }}">
                @csrf
                <select name="status_pesanan">
                    <option value="menunggu">Menunggu</option>
                    <option value="diproses">Diproses</option>
                    <option value="dikirim">Diserahkan Kurir</option>
                    <option value="dibatalkan">Batal</option>
                </select>
                <button type="submit">Update</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
