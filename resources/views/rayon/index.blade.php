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
                    <form onsubmit="return confirm('Mau Logout??')" action="/logout" method="POST">
                        @csrf
                        <button type="submit">Log out</button>
                    </form>
                </li>
        </div>
    </div>
    </section>
    <div class="container">
        <h3>Rayon</h3>
        <a href="{{ route('rayon.create') }}" class="create">Tambah data</a>
        <form>
            <table class="table">
                  <tr>
                      <td>No</td>
                      <td width="500px">Rayon</td>
                      <td>Pembingbing</td>
                      <td>No Telp</td>
                      <td colspan="2">Action</td>
                  </tr>
                  @php
                      $i = 0;
                  @endphp
                  @foreach($rayon as $key => $r)
                  <tr>
                      <td> {{ ++$i }}</td>
                      <td> {{ $r->rayon}} </td>
                      <td> {{ $r->pembingbing}} </td>
                      <td> {{ $r->no_telp}} </td>
                      <td><a href="{{ route('rayon.edit', $r->id) }}" class="btn btn-primary">EDIT</a></td> 
                      <td>
                            <form onsubmit="return confirm('Yakin Hapus {{ $r->rayon }}??')" action="{{ route('rayon.destroy', $r->id) }} " method="POST">
                            @csrf
                            @method('DELETE')
  
                            <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </td> 
                      </td> 
                  </tr>
                  @endforeach
            </table>
          </form>
    </div>
</body>
</html>
    