@extends('dashboard.layouts.main')

@section('content')
    <div class="container-xxl" id="kt_content_container">
        <div class="card">
            <div class="card-header border-0 pt-6">
                <div class="card-title">
                    <h1 class="h3"><strong>Master</strong> Satuan</h1>
                </div>
                <div class="card-toolbar">
                    <a href="{{ route('satuan.create') }}" class="btn btn-primary">Tambah Satuan</a>
                </div>
            </div>

            <div class="card-body pt-0">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif

                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_satuan">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th>No</th>
                            <th>Nama Satuan</th>
                            <th>Status</th>
                            <th class="min-w-100px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                        @foreach ($satuan as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_satuan }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="{{ route('satuan.edit', $item->satuan_id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('satuan.destroy', $item->satuan_id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
