@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Data Rumah Sakit</h4>
        <a href="{{ route('rumah-sakit.create') }}" class="btn btn-primary">+ Tambah Rumah Sakit</a>
    </div>
    <div class="card-body">
        <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Rumah Sakit</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rumahSakits as $rs)
                <tr id="row-{{ $rs->id }}">
                    <td>{{ $rs->id }}</td>
                    <td>{{ $rs->nama_rumah_sakit }}</td>
                    <td>{{ $rs->alamat }}</td>
                    <td>{{ $rs->email }}</td>
                    <td>{{ $rs->telepon }}</td>
                    <td>
                        <a href="{{ route('rumah-sakit.edit', $rs->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('rumah-sakit.destroy', $rs->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Yakin mau hapus data?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
