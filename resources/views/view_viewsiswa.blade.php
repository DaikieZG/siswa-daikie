<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
    <h2>View Mahasiswa | <a href="{{ url('siswa/create') }}" class="btn btn-primary">Add</h2></a>
    <h2>
        <form>
        <table class="table table-hover" border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat,Tanggal Lahir</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Angkatan</th>
                <th>Aksi</th>
            </tr>
            @foreach ($siswa as $siswa)
                <tr>
                    <td>{{ $siswa->id }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td>{{ $siswa->tempat_tgl }}</td>
                    <td>{{ $siswa->kelas }}</td>
                    <td>{{ $siswa->jurusan }}</td>
                    <td>{{ $siswa->angkatan }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ url('siswa') . '/' . $siswa->id . '/edit' }}">Edit</a>&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-danger" href="{{ url('siswa') . '/' . $siswa->id . '/delete' }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </form>
</body>

</html>
