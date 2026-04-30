
<h1>Dashboard Admin</h1>
<a href="/admin/users">Manajemen User</a> | <a href="/admin/stores">Verifikasi Toko</a> | <a href="/admin/categories">Kategori</a>
| <form method="POST" action="/logout" style="display:inline;">@csrf<button>Logout</button></form>
<hr>
<table border="1" cellpadding="5">
    <tr><th>Total Users</th><td>{{ $data['total_users'] }}</td></tr>
    <tr><th>Total Toko</th><td>{{ $data['total_stores'] }}</td></tr>
    <tr><th>Total Produk</th><td>{{ $data['total_products'] }}</td></tr>
    <tr><th>Total Transaksi</th><td>{{ $data['total_orders'] }}</td></tr>
</table>
