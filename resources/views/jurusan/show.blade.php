
<h1>Detail Jurusan</h1>
<table border="2" cellpadding="10">
    <tr><th>Kode</th><th>Nama</th><th>Dibuat</th></tr>
    <tr>
        <td>{{ $jurusan->code }}</td>
        <td>{{ $jurusan->nama }}</td>
        <td>{{ $jurusan->created_at->format('d-m-Y H:i') }}</td>
    </tr>
</table>