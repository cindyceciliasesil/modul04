<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

<h2 class="mb-4">📚 Daftar Buku Per Kategori</h2>

@foreach($categories as $category)

<div class="card mb-3">
    <div class="card-header bg-primary text-white">
        <strong>{{ $category->nama_kategori }}</strong><br>
        <small>{{ $category->deskripsi }}</small>
    </div>

    <div class="card-body">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Stok</th>
                </tr>
            </thead>

            <tbody>
                @foreach($category->books as $book)
                <tr>
                    <td>{{ $book->judul }}</td>
                    <td>{{ $book->penulis }}</td>
                    <td>{{ $book->tahun_terbit }}</td>
                    <td>{{ $book->stok }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endforeach

</body>
</html>