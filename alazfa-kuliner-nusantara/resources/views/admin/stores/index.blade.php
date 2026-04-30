
<h1>Verifikasi Toko</h1>
<a href="/admin/dashboard">Dashboard</a>
<hr>
@if(session('success')) <div style="color:green; font-weight:bold;">{{ session('success') }}</div><br> @endif
<table border="1" cellpadding="5">
    <tr><th>Toko</th><th>Pemilik</th><th>Status Saat Ini</th><th>Aksi Verifikasi</th></tr>
    @foreach($stores as $s)
    <tr>
        <td>{{ $s->nama_toko }}</td>
        <td>{{ $s->user->name ?? '-' }}</td>
        <td>{{ $s->status_verifikasi }}</td>
        <td>
            <form method="POST" action="{{ route('admin.stores.verify', $s->id_toko) }}" style="display:inline;">
                @csrf
                <input type="hidden" name="status" value="terverifikasi">
                <button type="submit">Setujui</button>
            </form>
            <form method="POST" action="{{ route('admin.stores.verify', $s->id_toko) }}" style="display:inline;">
                @csrf
                <input type="hidden" name="status" value="ditolak">
                <button type="submit">Tolak</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
