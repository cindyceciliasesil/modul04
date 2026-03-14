<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

<h3>Data Book</h3>

<!-- INFORMASI JUMLAH DATA -->
<p><strong>Total Buku:</strong> {{ $totalBooks }}</p>
<ul>
@foreach($totalPerCategory as $cat)
    <li>{{ $cat->nama_kategori }} : {{ $cat->books_count }}</li>
@endforeach
</ul>

<!-- FORM SEARCH & FILTER -->
<form method="GET" action="{{ route('books.index') }}" class="row mb-3">
    <div class="col-md-4">
        <input type="text" name="search" class="form-control"
               placeholder="Cari judul buku..."
               value="{{ request('search') }}">
    </div>

    <div class="col-md-4">
        <select name="category_id" class="form-control">
            <option value="">-- Semua Kategori --</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ request('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->nama_kategori }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-2">
        <button class="btn btn-primary">Filter</button>
    </div>
</form>

<div class="d-flex justify-content-between mb-3">
    <a href="{{ route('books.create') }}" class="btn btn-success">+ Tambah</a>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="card">
    <div class="card-body">

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $key => $book)
                <tr>
                    <td>{{ $key + 1 }}</td>

                    <td>
                        @if($book->gambar)
                            <img src="{{ asset('storage/' . $book->gambar) }}" width="60" height="80" style="object-fit: cover; border-radius: 6px;">
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>

                    <td>{{ $book->judul }}</td>
                    <td>{{ $book->penulis }}</td>
                    <td>{{ $book->tahun_terbit }}</td>
                    <td>
                        <span class="badge bg-info">{{ $book->stok }}</span>
                    </td>
                    <td>{{ $book->category->nama_kategori }}</td>
                    <td>
                        <a href="{{ route('books.edit',$book->id) }}" 
                           class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('books.destroy',$book->id) }}" 
                              method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin hapus data?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

</body>
</html>