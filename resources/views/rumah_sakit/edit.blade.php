@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">Edit Rumah Sakit</div>
    <div class="card-body">
        <form method="POST" action="{{ route('rumah-sakit.update', $rumahSakit->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama Rumah Sakit</label>
                <input type="text" name="nama_rumah_sakit" class="form-control"
                    value="{{ $rumahSakit->nama_rumah_sakit }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control"
                    value="{{ $rumahSakit->alamat }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control"
                    value="{{ $rumahSakit->email }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Telepon</label>
                <input type="text" name="telepon" class="form-control"
                    value="{{ $rumahSakit->telepon }}">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('rumah-sakit.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
