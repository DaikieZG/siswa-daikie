<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
    <h2>Edit Siswa</h2>
    <form method="post" action="{{ url('siswa/edit') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $siswa->id }}">
        <input type="text" name="nama" value="{{ $siswa->nama }}"><br><br>
        <input type="text" name="alamat" value="{{ $siswa->alamat }}"><br><br>
        <input type="text" name="tempat_tgl" value="{{ $siswa->tempat_tgl }}"><br><br>
        <input type="text" name="kelas" value="{{ $siswa->kelas }}"><br><br>
        <input type="text" name="jurusan" value="{{ $siswa->jurusan }}"><br><br>
        <input type="text" name="angkatan" value="{{ $siswa->angkatan }}"><br><br>
        <input class="btn btn-primary" type="submit" value="proses">
    </form>

    <body>

</html>
