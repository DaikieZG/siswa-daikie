<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
    <h2>Add Siswa</h2>
    <form method="post" action="{{ url('siswa/create') }}">
        @csrf
        <input type="hidden" name="id" placeholder="ID">
        Nama<br>
        <input type="text" name="nama" placeholder="Nama"><br><br>
        Alamat<br>
        <input type="text" name="alamat" placeholder="Alamat"><br><br>
        Tempat Tanggal Lahir<br>
        <input type="text" name="tempat_tgl" placeholder="Tempat Tanggal Lahir"><br><br>
        Kelas<br>
        <input type="text" name="kelas" placeholder="Kelas"><br><br>
        Jurusan<br>
        <input type="text" name="jurusan" placeholder="Jurusan"><br><br>
        Angkatan<br>
        <input type="number" name="angkatan" placeholder="Angkatan"><br><br>
        <input class="btn btn-primary" type="submit" value="proses">
    </form>

    <body>
