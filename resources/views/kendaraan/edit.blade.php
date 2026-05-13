@extends('layouts.master')

@section('content')
<div class="card shadow-sm border-0" style="border-radius: 15px;">
    <div class="card-header bg-warning text-dark" style="border-radius: 15px 15px 0 0;">
        <h5 class="mb-0">Edit Data Kendaraan</h5>
    </div>
    <div class="card-body p-4">
        <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- Method Spoofing sesuai Instruksi No. 5 --}}
            
            <div class="mb-3">
                <label class="form-label fw-bold">Plat Nomor</label>
                <input type="text" name="plat_nomor" class="form-control" value="{{ $kendaraan->plat_nomor }}">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Pemilik</label>
                <input type="text" name="nama_pemilik" class="form-control" value="{{ $kendaraan->nama_pemilik }}">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Merk Kendaraan</label>
                <input type="text" name="merk_kendaraan" class="form-control" value="{{ $kendaraan->merk_kendaraan }}">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Keluhan</label>
                <textarea name="keluhan" class="form-control" rows="3">{{ $kendaraan->keluhan }}</textarea>
            </div>
            <button type="submit" class="btn btn-warning">Update Data</button>
        </form>
    </div>
</div>
@endsection