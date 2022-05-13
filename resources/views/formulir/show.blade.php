<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="sidebar">
            <div class="logo-content">
                <div class="title">Perpustakaan</div>
                    <ul class="nav-list">
                        <li>
                            <a href="home">
                            <i class="bi bi-house"></i>
                            <span class="link-name">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('formulir') }}">
                            <i class="bi bi-envelope-paper"></i>
                            <span class="link-name">Formulir</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('buku') }}">
                                <i class="bi bi-book"></i>
                            <span class="link-name">Daftar buku</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('rombel') }}">
                                <i class="bi bi-person"></i>
                            <span class="link-name">Rombel</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('rayon') }}">
                                <i class="bi bi-person"></i>
                            <span class="link-name">Rayon</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('students') }}">
                                <i class="bi bi-person"></i>
                            <span class="link-name">Siswa</span>
                            </a>
                        </li>

                    </ul>
                    <div class="profile-content">
                        <div class="profile">
                            <div class="profile-details">
                                <div class="content">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </section>
    <section>
    <div class="navbar">
        <div class="navbar-content">
            <ul class="content">
                <li>
                   
                </li>
        </div>
    </div>
    </section>
    <div class="container">
        <h3>Data Lengkap</h3>
        <br><br>
    <div class="form">
        <div class="form-group">
            <strong>Nis :</strong>
            {{ $formulir->nis}}
        </div>
        <div class="form-group">
            <strong>Nama :</strong>
            {{ $formulir->nama_peminjam}}
        </div>
        <div class="form-group">
            <strong>Rombel :</strong>
            {{ $formulir->rombel}}
        </div>
        <div class="form-group">
            <strong>Rayon :</strong>
            {{ $formulir->rayon}}
        </div>
        <div class="form-group">
            <strong>jenis kelamin :</strong>
            {{ $formulir->jk}}
        </div>
        <div class="form-group">
            <strong>Judul Buku :</strong>
            {{ $formulir->judul_buku}}
        </div>
        <div class="form-group">
            <strong>Tanggal Pinjam :</strong>
            {{ $formulir->tgl_pinjam}}
        </div>
        <div class="form-group">
            <strong>Petugas :</strong>
            {{ $formulir->petugas}}
        </div>
        <div class="form-group">
            <strong>Status :</strong>
            {{ $formulir->status}}
        </div>
        <br>
        <br>
        <tr>
            <a href="{{ route('formulir.index') }}">Kembali</a>
        </tr>
    </div>
    </div>
</body>
</html>
    