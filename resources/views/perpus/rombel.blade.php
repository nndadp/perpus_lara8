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
                            <a href="#">
                            <i class="bi bi-envelope-paper"></i>
                            <span class="link-name">Formulir</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bi bi-book"></i>
                            <span class="link-name">Daftar buku</span>
                            </a>
                        </li>
                        <li>
                            <a href="rombel">
                                <i class="bi bi-person"></i>
                            <span class="link-name">Rombel</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bi bi-person"></i>
                            <span class="link-name">Rayon</span>
                            </a>
                        </li>

                    </ul>
                    <div class="profile-content">
                        <div class="profile">
                            <div class="profile-details">
                                <div class="content">
                                    <div class="nama">Oryza Sativa</div>
                                    <div class="role">Admin</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </section>
    <div class="navbar">
        <div class="navbar-content">
            <ul class="content">
                <li>
                    <a href="#">
                        <i class="bi bi-box-arrow-right"></i>
                        <span class="text-content">Log out</span>
                    </a>
                </li>
        </div>
    </div>
    <div class="container">
       <div class="judul">
           <h3>Rombel</h3>
       </div>
       <div class="button">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data
          </button>
       </div>
       <div class="table-container">
        <form>
          <table class="table table-bordered">
                <tr>
                    <td>No</td>
                    <td>Rombel</td>
                    <td colspan="2">Action</td>
                </tr>
                @foreach($perpus as $key => $p)
                <tr>
                    <td></td>
                    <td> {{ $p->rombel}} </td>
                    <td><a href="{{ url('school/'.$s->id.'/edit') }}" class="btn btn-primary">EDIT</a></td> 
                    <td><a href="" class="btn btn-secondary">Show</a></td>
                    <td>
                        <form onsubmit="return confirm('Yakin Hapus {{ $s->nama }}??')" action="{{ url('school/'.$s->id) }} " method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">DELETE</button>
                         </form>
                    </td> 
                </tr>
                @endforeach
          </table>
        </form>
       </div>
    </div>
</body>
</html>
    