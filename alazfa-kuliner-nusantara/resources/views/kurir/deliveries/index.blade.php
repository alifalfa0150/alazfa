
<h1>Tugas Pengantaran</h1>
<a href="/kurir/dashboard">Dashboard</a>
<hr>
@if(session('success')) <div style="color:green; font-weight:bold;">{{ session('success') }}</div><br> @endif

<h3>Daftar Pesanan Tersedia (Menunggu Kurir):</h3>
<table border="1" cellpadding="5">
    <tr><th>Toko</th><th>Pelanggan</th><th>Aksi</th></tr>
    @foreach($available_orders as $o)
    <tr>
        <td>{{ $o->store->nama_toko ?? '-' }}</td>
        <td>{{ $o->user->name ?? '-' }}</td>
        <td>
            <form method="POST" action="{{ route('kurir.deliveries.accept', $o->id_pesanan) }}">
                @csrf
                <button type="submit">Ambil Tugas Ini</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<hr>
<h3>Tugas Saya (Sedang Diantar):</h3>
<table border="1" cellpadding="5">
    <tr><th>Toko</th><th>Pelanggan</th><th>Status Saat Ini</th><th>Update Status</th></tr>
    @foreach($my_deliveries as $o)
    <tr>
        <td>{{ $o->store->nama_toko ?? '-' }}</td>
        <td>{{ $o->user->name ?? '-' }}</td>
        <td>{{ strtoupper($o->status_pesanan) }}</td>
        <td>
            <form method="POST" action="{{ route('kurir.deliveries.status', $o->id_pesanan) }}">
                @csrf
                <select name="status_pesanan">
                    <option value="dikirim">Sedang Di Perjalanan (Dikirim)</option>
                    <option value="selesai">Pesanan Selesai / Sampai</option>
                </select>
                <button type="submit">Update</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
