@extends('template')

@section('tulisan1', 'Data Keyboard')

@section('link1')
    <a href="/keyboard/tambah" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Inventori Baru
    </a>
@endsection

@section('konten')
    <!-- Search Section -->
    <div class="mb-4">
        <p>Cari Data Keyboard:</p>
        <form action="/keyboard/cari" method="GET" class="d-flex">
            <input type="text" name="cari" class="form-control me-2" placeholder="Cari Keyboard..." value="{{ old('cari') }}">
            <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
    </div>

    <!-- Table Section -->
    <table class="table table-striped table-hover">
        <thead style="background-color: #343a40; color: white;">
            <tr>
                <th width=70%>Merk</th>
                <th width=10%>Stock</th>
                <th width=10%>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keyboard as $p)
            <tr>
                <td>{{ $p->merkkeyboard }}</td>
                <td>{{ $p->stockkeyboard }}</td>
                <td>
                    <form action="/keyboard/update-status/{{ $p->kodekeyboard }}" method="POST">
                        @csrf
                        @method('PATCH') <!-- Use PATCH method for updating -->
                        <input type="checkbox" name="tersedia" value="1"
                            {{ $p->tersedia == 1 ? 'checked' : '' }}
                            onchange="this.form.submit()"> <!-- Auto-submit when checkbox is changed -->
                    </form>
                <td>
                    <a href="/keyboard/edit/{{ $p->kodekeyboard }}" class="btn btn-info btn-sm">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                    <span class="mx-1">|</span>
                    <a href="/keyboard/delete/{{ $p->kodekeyboard }}" class="btn btn-danger btn-sm"
                       onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                       <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Section -->
    <div class="mt-4">
        <p>Halaman: {{ $keyboard->currentPage() }}</p>
        <p>Jumlah Data: {{ $keyboard->total() }}</p>
        <p>Data Per Halaman: {{ $keyboard->perPage() }}</p>
        {{ $keyboard->links() }}
    </div>
@endsection
