<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
    <style>
        .container-input{
            position: absolute;
            top : 80px;
            left: 305px;
            width: 50%;
        }
        .container label{
            font-size: 20px;
            color: white;
            

        }
        .container .input{
            width: 100%;
            padding: 1px;
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
        <div class="container-input">
       
        <form method="POST" action="{{ route('formulir.store') }}">
            @csrf
            <tr>
                <label>Nis :</label>
                <select class="input" name="nis">
                    <option selected disabled>-- Pilih -- </option>
                    @foreach($students as $key => $s)
                        <option value="{{ $s->nis }}">{{ $s->nis }}</option>
                    @endforeach
                </select>
            </tr>
            <tr>
                <label>Nama :</label>
                <select class="input" name="nama_peminjam">
                    <option selected disabled>-- Pilih -- </option>
                @foreach($students as $key => $s)
                    <option value="{{ $s->nama }}">{{ $s->nama}}</option>
                @endforeach
                </select>
            </tr>
            <tr>
                <label>Rombel :</label>
                <select class="input" name="rombel">
                    <option selected disabled>-- Pilih --</option>
                    @foreach($rombel as $key => $r)
                        <option value="{{ $r->rombel }}">{{ $r->rombel }}</option>
                    @endforeach
                </select>
            </tr>
            <tr>
                <label>Rayon :</label>
                <select class="input" name="rayon">
                    <option selected disabled>-- Pilih --</option>
                    @foreach($rayon as $key => $ry)
                        <option value="{{ $ry->rayon }}">{{ $ry->rayon }}</option>
                    @endforeach
                </select>
            </tr>
            <tr>
                <label>jenis kelamin :</label>
                <select class="input" name="jk">
                    <option  selected disabled>-- pilih --</option>
                    <option value="laki-laki">L</option>
                    <option value="perempuan">P</option>
                </select>
            </tr>
            <tr>
                <label>Judul Buku :</label>
                <select class="input" name="judul_buku">
                    <option selected disabled>-- Pilih --</option>
                    @foreach($buku as $key => $b)
                        <option value="{{ $b->judul_buku }}">{{ $b->judul_buku }}</option>
                    @endforeach
                </select>
            </tr>
            <tr>
                <label>Tanggal Kembali :</label>
                <input type="date" name="tgl_kembali" class="input">
            </tr>
            <tr>
                <input type="hidden" name="petugas" class="input" value="{{ auth()->user()->name }}">
            </tr>
            <tr>
                <input type="hidden" name="status" value="Belum dikembalikan">
            </tr>
           

        <br><br>

            <tr>
                <button type="submit" class="">Simpan</button>
                <a href="{{ route('formulir.index') }}">Kembali</a>
            </tr>
            @error('nis')
            <span class="gagal"><br>*Harap isi kolom nis<br></span>
            @enderror
            @error('nama_peminjam')
                <span class="gagal">*Harap isi kolom nama<br></span>
            @enderror
            @error('rombel')
                <span class="gagal">*Harap isi kolom rombel<br></span>
            @enderror
            @error('rayon')
                <span class="gagal">*Harap isi kolom rayon<br></span>
            @enderror
            @error('jk')
            <span class="gagal">*Harap isi kolom jenis kelamin<br></span>
            @enderror
            @error('judul_buku')
                <span class="gagal">*Harap isi kolom judul buku<br></span>
            @enderror
            @error('tgl_kembali')
            <span class="gagal">*Harap isi kolom Tanggal kembali<br></span>
            @enderror
            @error('petugas')
                <span class="gagal">*Harap isi kolom petugas<br></span>
            @enderror
        <br>  
        </form>
    </div>
    </div>
</body>
</html>
    