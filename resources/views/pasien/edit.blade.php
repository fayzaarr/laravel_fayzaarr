@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">Edit Pasien</div>
    <div class="card-body">
        <form method="POST" action="{{ route('pasien.update', $pasien->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama Pasien</label>
                <input type="text" name="nama_pasien" class="form-control" value="{{ $pasien->nama_pasien }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ $pasien->alamat }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">No Telpon</label>
                <input type="text" name="no_telpon" class="form-control" value="{{ $pasien->no_telpon }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Rumah Sakit</label>
                <select name="rumah_sakit_id" class="form-select" required>
                    @foreach($rumahSakits as $rs)
                        <option value="{{ $rs->id }}" {{ $pasien->rumah_sakit_id == $rs->id ? 'selected' : '' }}>
                            {{ $rs->nama_rumah_sakit }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
