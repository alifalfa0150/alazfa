
<h1>Dashboard Penjual</h1>
<a href="/penjual/products">Kelola Menu</a> | <a href="/penjual/orders">Pesanan Masuk</a> | <a href="/penjual/store">Profil Toko</a>
| <form method="POST" action="/logout" style="display:inline;">@csrf<button>Logout</button></form>
<hr>
<h3>Toko Anda: {{ $data['store']->nama_toko ?? 'Belum ada' }}</h3>
<table border="1" cellpadding="5">
    <tr><th>Total Produk</th><td>{{ $data['total_products'] }}</td></tr>
    <tr><th>Total Pesanan Masuk</th><td>{{ $data['total_orders'] }}</td></tr>
    <tr><th>Pesanan Menunggu</th><td>{{ $data['pending_orders'] }}</td></tr>
</table>
