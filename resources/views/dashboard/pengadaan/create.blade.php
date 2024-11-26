@extends('dashboard.layouts.main')

@section('content')
    <div class="container-xxl" id="kt_content_container">
        <div class="card">
            <div class="card-header border-0 pt-6">
                <h1 class="h3"><strong>Tambah</strong> Pengadaan</h1>
            </div>

            <div class="card-body pt-0">
                <form action="{{ route('pengadaan.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User</label>
                        <select name="user_id" class="form-select" required>
                            @foreach ($users as $user)
                                <option value="{{ $user->user_id }}">{{ $user->username }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="vendor_id" class="form-label">Vendor</label>
                        <select name="vendor_id" class="form-select" required>
                            @foreach ($vendor as $v)
                                <option value="{{ $v->vendor_id }}">{{ $v->nama_vendor }}</option>
                            @endforeach
                        </select>
                        @error('vendor_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="subtotal_nilai" class="form-label">Subtotal Nilai</label>
                        <input type="number" name="subtotal_nilai" class="form-control" required>
                        @error('subtotal_nilai')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="ppn" class="form-label">PPN (%)</label>
                        <input type="number" name="ppn" class="form-control"
                            placeholder="Masukkan persentase PPN (contoh: 10)" required>
                        @error('ppn')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>


            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection