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
        <h3>edit data </h3>
        <div class="container-input">
        <form action="{{ route('students.update',$model->id) }}" method="POST">
            @csrf
            @method('PUT')
            <tr>
                <label>Nis :</label>
                <input type="number" name="nis" class="input" value="{{ $model->id }}">
            </tr>
            <tr>
                <label>Nama :</label>
                <input type="text" name="nama" class="input" value="{{ $model->nama }}">
            </tr>
            <tr>
                <label>Rombel :</label>
                <select class="input" name="rombel">
                    <option value="{{ $model->rombel}}">{{ $model->rombel}}</option>
                    @foreach($rombel as $key => $r)
                    <option value="{{ $r->rombel }}">{{ $r->rombel }}</option>
                    @endforeach
                </select>
            </tr>
            <tr>
                <label>Rayon :</label>
                <select class="input" name="rayon">
                    <option value="{{ $model->rayon}}">{{ $model->rayon}}</option>
                    @foreach($rayon as $key => $ry)
                    <option value="{{ $ry->rayon }}">{{ $ry->rayon }}</option>
                    @endforeach
                </select>
            </tr>
            <tr>
                <label>JK :</label>
                <select class="input" name="jk">
                    <option value="{{ $model->jk }}">{{ $model->jk}}</option>
                    <option value="laki-laki">L</option>
                    <option value="perempuan">P</option>
                </select>
            </tr>
        <br><br>
            <tr>
                <button type="submit" class="">Simpan</button>
                <a href="{{ route('students.index') }}">Kembali</a>
            </tr>
            <tr>
                <br><br>
                @error('nis')
                    <span class="gagal">*Harap isi nis / kelebihan angka<br></span>
                @enderror
                @error('nama')
                    <span class="gagal">*Harap isi nama<br></span>
                @enderror
                @error('rombel')
                    <span class="gagal">*Harap isi rombel<br></span>
                @enderror
                @error('rayon')
                    <span class="gagal">*Harap isi rayon<br></span>
                @enderror
                @error('jk')
                    <span class="gagal">*Harap isi jenis kelamin<br><br></span>
                @enderror
                </tr>
        </form>
    </div>
    </div>
</body>
</html>
    