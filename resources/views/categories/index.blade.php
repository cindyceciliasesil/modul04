<!DOCTYPE html>
<html>
<head>
    <title>Data Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h3>Data Category</h3>

<a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">+ Tambah</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama Category</th>
            <th width="150">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $key => $category)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $category->nama_kategori }}</td>
            <td>
                <a href="{{ route('categories.edit',$category->id) }}" 
                   class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('categories.destroy',$category->id) }}" 
                      method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin hapus?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>