<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyData</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body style="background: lightgray">
<div class="sidebar">
    <a class="active" href="#home">Dashboard</a>
    <a href="{{route('posts.index')}}">Post</a>
    <a href="{{route('recipes.index')}}">Recipe</a>
    <a href="{{ route('alamats.index')}}">Alamat</a>
    <a href="{{ route('logout')}}" class="">Logout</a>
  </div>
  <div class="content">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">HALAMAN ALAMAT</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('alamats.create') }}" class="btn btn-md btn-success mb-3">TAMBAH ALAMAT</a>
                        {{-- <form action="{{ route('posts.keyword') }}" method="GET">
                            <input type="text" name="search" placeholder="Cari...">
                            <button type="submit">Cari</button>
                        </form> --}}

                        <table class="table table-bordered mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">NAMA TEMPAT</th>
                                    <th scope="col">ALAMAT</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($alamats as $alamat)
                                    <tr>
                                        <td>{{ $alamat->nama_tempat }}</td>
                                        <td>{!! $alamat->alamat !!}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('alamats.destroy', $alamat->id) }}" method="POST">
                                                <a href="{{ route('alamats.show', $alamat->id) }}"
                                                    class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('alamats.edit', $alamat->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Post belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $alamats->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</body>
</html>
