@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Data Pasien</h4>
        <a href="{{ route('pasien.create') }}" class="btn btn-primary">+ Tambah Pasien</a>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">Filter Rumah Sakit:</label>
            <select id="filter-rs" class="form-select">
                <option value="">-- Semua --</option>
                @foreach($rumahSakits as $rs)
                    <option value="{{ $rs->id }}" {{ request('rumah_sakit_id') == $rs->id ? 'selected' : '' }}>
                        {{ $rs->nama_rumah_sakit }}
                    </option>
                @endforeach
            </select>
        </div>

        <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Pasien</th>
                    <th>Alamat</th>
                    <th>No Telpon</th>
                    <th>Rumah Sakit</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pasiens as $ps)
                <tr id="row-{{ $ps->id }}">
                    <td>{{ $ps->id }}</td>
                    <td>{{ $ps->nama_pasien }}</td>
                    <td>{{ $ps->alamat }}</td>
                    <td>{{ $ps->no_telpon }}</td>
                    <td>{{ $ps->rumahSakit->nama_rumah_sakit }}</td>
                    <td>
                        <a href="{{ route('pasien.edit', $ps->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <button class="btn btn-sm btn-danger btn-delete" data-id="{{ $ps->id }}">Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on('click', '.btn-delete', function() {
    let id = $(this).data('id');
    if(confirm('Yakin mau hapus data?')) {
        $.ajax({
            url: '/pasien/' + id,
            type: 'DELETE',
            data: { _token: '{{ csrf_token() }}' },
            success: function(res) {
                if(res.success) {
                    $('#row-' + id).remove();
                }
            }
        });
    }
});

$('#filter-rs').change(function() {
    let rs_id = $(this).val();
    window.location.href = "?rumah_sakit_id=" + rs_id;
});
</script>
@endsection
