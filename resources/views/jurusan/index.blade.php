<!--<h1>Daftar Jurusan</h1>
<table border="1" cellpadding="6">
<tr><th>No</th><th>Kode</th><th>Nama Jurusan</th><th>Dibuat</th><th>Aksi</th></tr>
@forelse ($jurusans as $j)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $j->kode }}</td>
<td>{{ $j->nama }}</td>
<td>{{ $j->created_at->format('d-m-Y H:i') }}</td>
<td><a href="{{ url('/jurusan/' . $j->id) }}">Detail</a></td>
</tr>
@empty
<tr><td colspan="5">Belum ada data.</td></tr>
@endforelse
</table>  -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Jurusan</title>
</head>
<body>
    <h1>Data Jurusan</h1>
    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif
    <a href="{{ route('jurusan.create') }}">Tambah Jurusan</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($jurusans as $jurusan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $jurusan->code }}</td>
                <td>{{ $jurusan->nama }}</td>
                <td><a href="{{ url('/jurusan/' . $j->id) }}">Detail</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="3">Belum ada data jurusan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>