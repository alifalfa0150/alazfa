
<h1>Dashboard Kurir</h1>
<a href="/kurir/deliveries">Tugas Pengantaran</a>
| <form method="POST" action="/logout" style="display:inline;">@csrf<button>Logout</button></form>
<hr>
<table border="1" cellpadding="5">
    <tr><th>Tugas Baru Tersedia</th><td>{{ $data['new_tasks'] }}</td></tr>
    <tr><th>Tugas Sedang Diantar</th><td>{{ $data['active_deliveries'] }}</td></tr>
    <tr><th>Tugas Selesai</th><td>{{ $data['completed_deliveries'] }}</td></tr>
</table>
