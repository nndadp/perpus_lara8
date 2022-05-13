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
        <form method="POST" action="{{ route('rayon.store') }}">
            @csrf
            <tr>
                <label>Rayon :</label>
                <input type="text" name="rayon" class="input">
            </tr>
            <br><br>
            <tr>
                <label>Pembingbing :</label>
                <input type="text" name="pembingbing" class="input">
            </tr>
            <br><br>
            <tr>
                <label>No telp :</label>
                <input type="text" name="no_telp" class="input">
            </tr>
        <br><br>
            <tr>
                <button type="submit" class="">Tambah</button>
                <a href="{{ route('rayon.index') }}">Kembali</a>
            </tr>
            <tr>
                <br><br>
                @error('rayon')
                <span class="gagal">*Harap isi rayon<br></span>
                @enderror
                @error('pembingbing')
                <span class="gagal">*Harap isi pembingbing<br></span>
                @enderror
                @error('no_telp')
                <span class="gagal">*harap isi no telpon<br></span>
                @enderror
            </tr>
        </form>
    </div>
    </div>
</body>
</html>
    