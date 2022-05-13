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
    <style>
        .container-input{
            position: absolute;
            top : 200px;
            left: 305px;
            width: 50%;
        }
        .container label{
            font-size: 20px;
            color: white;
            

        }
        .container .input{
            width: 100%;
            padding: 8px;
            border-radius: 4px;
        }
    </style>
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
                            <a href="">
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
        <h3>Tambah data</h3>
        <div class="container-input">
        <form method="POST" action="{{ route('buku.store') }}">
            @csrf
            <tr>
                <label>Judul Buku :</label>
                <input type="text" name="judul_buku" class="input">
            </tr>
            <tr>
                <label>Penerbit :</label>
                <input type="text" name="penerbit" class="input">
            </tr>
            <tr>
                <label>Pengarang :</label>
                <input type="text" name="pengarang" class="input">
            </tr>
        <br><br>
            <tr>
                <button type="submit" class="">Tambah</button>
                <a href="{{ route('buku.index') }}">Kembali</a>
            </tr>
            <br><br>
            <tr>
                @error('judul_buku')
                    <span class="gagal">*Harap isi judul buku<br></span>
                @enderror
                @error('penerbit')
                    <span class="gagal">*Harap isi penerbit<br></span>
                @enderror
                @error('pengarang')
                <span class="gagal">*Harap isi pengarang<br></span>
                @enderror
        </form>
    </div>
    </div>
</body>
</html>
    