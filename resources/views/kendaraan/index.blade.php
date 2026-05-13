@extends('layouts.master')

@section('content')
<div class="main-card text-center">
    <h1 class="welcome-title mb-3">Selamat Datang di Halaman Daftar Servis</h1>
    <p class="text-muted mb-5">Gunakan menu 'Daftar Servis' di atas untuk mengelola data antrean kendaraan.</p>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('kendaraan.create') }}" class="btn btn-add text-white">
            <i class="fas fa-plus-circle me-2"></i> + Tambah Kendaraan
        </a>
    </div>

    <div class="table-container shadow-sm">
        <table class="table table-hover mb-0">
            <thead style="background-color: #2c7670;">
                <tr>
                    <th>ID</th>
                    <th>Plat Nomor</th>
                    <th>Nama Pemilik</th>
                    <th>Merk Kendaraan</th>
                    <th>Keluhan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kendaraans as $k)
                <tr>
                    <td>{{ $k->id }}</td>
                    <td><span class="badge bg-light text-dark border">{{ $k->plat_nomor }}</span></td>
                    <td>{{ $k->nama_pemilik }}</td>
                    <td>{{ $k->merk_kendaraan }}</td>
                    <td>{{ $k->keluhan }}</td>
                    <td>
                        <a href="{{ route('kendaraan.edit', $k->id) }}" class="text-info me-2"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('kendaraan.destroy', $k->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent text-danger" onclick="return confirm('Hapus data?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="py-4 text-muted">Belum ada antrean kendaraan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection