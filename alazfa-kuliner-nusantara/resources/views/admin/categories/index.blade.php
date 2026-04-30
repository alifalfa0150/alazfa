
<h1>Manajemen Kategori</h1>
<a href="/admin/dashboard">Dashboard</a>
<hr>
@if(session('success')) <div style="color:green; font-weight:bold;">{{ session('success') }}</div><br> @endif

<h3>Tambah Kategori Baru:</h3>
<form method="POST" action="{{ route('admin.categories.store') }}">
    @csrf
    <input type="text" name="nama_kategori" placeholder="Nama Kategori" required>
    <input type="text" name="deskripsi" placeholder="Deskripsi">
    <button type="submit">Tambah</button>
</form>
<br>
<table border="1" cellpadding="5">
    <tr><th>ID</th><th>Kategori</th><th>Deskripsi</th><th>Aksi</th></tr>
    @foreach($categories as $c)
    <tr>
        <td>{{ $c->id_kategori }}</td>
        <td>{{ $c->nama_kategori }}</td>
        <td>{{ $c->deskripsi }}</td>
        <td>
            <form method="POST" action="{{ route('admin.categories.destroy', $c->id_kategori) }}" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
