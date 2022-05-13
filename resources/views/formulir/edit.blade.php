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
            top : 70px;
            left: 305px;
            width: 50%;
        }
        .container label{
            font-size: 20px;
            color: white;
            

        }
        .container .input{
            width: 100%;
            padding: 3px;
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
        <div class="container-input">
        <form action="{{ route('formulir.update',$model->id) }}" method="POST">
            @csrf
            @method('PUT')
            <tr>
                <label>Nis :</label>
                <select class="input" name="nis">
                    <option disabled value="{{ $model->nis }}">{{ $model->nis }}</option>
                    @foreach($students as $key => $s)
                        <option value="{{ $s->nis }}">{{ $s->nis }}</option>
                    @endforeach
                </select>
            </tr>
            <tr>
                <label>Nama :</label>
                <select class="input" name="nama_peminjam">
                    <option  disabled value="{{ $model->nama_peminjam }}">{{ $model->nama_peminjam }}</option>
                @foreach($students as $key => $s)
                    <option value="{{ $s->nama }}">{{ $s->nama}}</option>
                @endforeach
                </select>
            </tr>
            <tr>
                <label>Judul Buku :</label>
                <select class="input" name="judul_buku">
                    <option disabled value="{{ $model->judul_buku }}">{{ $model->judul_buku }}</option>
                    @foreach($buku as $key => $b)
                        <option value="{{ $b->judul_buku }}">{{ $b->judul_buku }}</option>
                    @endforeach
                </select>
            </tr>
            <tr>
                <label>Tanggal kembali :</label>
                <input type="date" name="tgl_kembali" class="input" value="{{ $model->tgl_kembali }}">
            </tr>
            <tr>
                <label>Petugas :</label>
                <input type="text" name="petugas" class="input" value="{{ $model->petugas }}">
            </tr>
            <tr>
                <label>Rombel :</label>
                <select class="input" name="rombel">
                    <option disabled value="{{ $model->rombel }}">{{ $model->rombel }}</option>
                    @foreach($rombel as $key => $r)
                        <option value="{{ $r->rombel }}">{{ $r->rombel }}</option>
                    @endforeach
                </select>
            </tr>
            <tr>
                <label>Rayon :</label>
                <select class="input" name="rayon">
                    <option disabled value="{{ $model->rayon }}">{{ $model->rayon }}</option>
                    @foreach($rayon as $key => $ry)
                        <option value="{{ $ry->rayon }}">{{ $ry->rayon }}</option>
                    @endforeach
                </select>
            </tr>
            <tr>
                <label>jenis kelamin :</label>
                <select class="input" name="jk">
                    <option disabled value="{{ $model->jk }}">{{ $model->jk }}</option>
                    <option value="laki-laki">L</option>
                    <option value="perempuan">P</option>
                </select>
            </tr>
            <tr>
                <label>Status :</label>
                <select class="input" name="status">
                    <option disabled value="{{ $model->status }}">{{ $model->status }}</option>
                    <option value="Belum Dikembalikan">Belum Dikembalikan</option>
                    <option value="Sudah Dikembalikan">Sudah Dikembalikan</option>
                </select>
            </tr>
            <tr>
                <br><br>
                <button type="submit" class="">Simpan</button>
                <a href="{{ route('formulir.index') }}">Kembali</a>
                <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>
            </tr>
            <br><br>
            @error('petugas')
                <span class="gagal">*Harap isi data petugas</span>
            @enderror
        </form>
    </div>
    </div>
</body>
</html>
    