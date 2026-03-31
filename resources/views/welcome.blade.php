<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Perpustakaan</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">Perpustakaan</a>
    </div>
</nav>

<div style="position: absolute; top: 20px; right: 20px;">
    <form method="POST" action="/logout">
        @csrf
        <button type="submit" style="
            background-color: red;
            color: white;
            border: none;
            padding: 5px 15px;
            border-radius: 3px;
        ">
            Logout
        </button>
    </form>
</div>

<!-- Hero -->
<div class="container mt-5">
    <div class="p-5 mb-4 bg-white rounded-4 shadow-sm text-center">
        <h1 class="display-5 fw-bold text-primary">Sistem Informasi Perpustakaan</h1>
        <p class="fs-5 text-muted mt-3">
            Website ini digunakan untuk mengelola data buku, kategori buku,
            stok buku, dan informasi perpustakaan secara sederhana.
        </p>
        <a href="{{ route('books.index') }}" class="btn btn-primary btn-lg mt-3">Lihat Data Buku</a>
    </div>

    <!-- Card Menu -->
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-0 rounded-4 h-100">
                <div class="card-body text-center p-4">
                    <h4 class="card-title mb-3">📚 Data Buku</h4>
                    <p class="card-text text-muted">
                        Kelola data buku seperti judul, penulis, tahun terbit, stok, dan gambar buku.
                    </p>
                    <a href="{{ route('books.index') }}" class="btn btn-primary">Masuk</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-0 rounded-4 h-100">
                <div class="card-body text-center p-4">
                    <h4 class="card-title mb-3">🗂️ Kategori Buku</h4>
                    <p class="card-text text-muted">
                        Kelola kategori buku agar data lebih rapi dan mudah dicari.
                    </p>
                    <a href="{{ route('categories.index') }}" class="btn btn-outline-primary">Masuk</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-primary text-white text-center py-3 mt-4">
    <p class="mb-0">© 2026 Sistem Informasi Perpustakaan</p>
</footer>

</body>
</html>