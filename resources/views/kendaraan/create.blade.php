@extends('layouts.master')

@section('content')
<div class="card shadow-sm border-0" style="border-radius: 15px;">
    <div class="card-header bg-primary text-white" style="border-radius: 15px 15px 0 0;">
        <h5 class="mb-0">Form Tambah Kendaraan</h5>
    </div>
    <div class="card-body p-4">
        <form action="{{ route('kendaraan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-bold">Plat Nomor</label>
                <input type="text" name="plat_nomor" class="form-control" placeholder="Contoh: BK 1234 XX" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Pemilik</label>
                <input type="text" name="nama_pemilik" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Merk Kendaraan</label>
                <input type="text" name="merk_kendaraan" class="form-control" placeholder="Honda, Yamaha, dll" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Keluhan</label>
                <textarea name="keluhan" class="form-control" rows="3" required></textarea>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary me-md-2">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan Kendaraan</button>
            </div>
        </form>
    </div>
</div>
@endsection