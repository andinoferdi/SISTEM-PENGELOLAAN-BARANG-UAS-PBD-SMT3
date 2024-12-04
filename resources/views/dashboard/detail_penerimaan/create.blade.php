@extends('dashboard.layouts.main')

@section('content')
    <div class="container-xxl">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Detail Penerimaan</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('detail_penerimaan.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="barang_id" class="form-label">Barang</label>
                        <select name="barang_id" class="form-control @error('barang_id') is-invalid @enderror" required>
                            <option value="" disabled selected>Pilih Barang</option>
                            @foreach ($barang as $item)
                                <option value="{{ $item->barang_id }}"
                                    {{ old('barang_id') == $item->barang_id ? 'selected' : '' }}>
                                    {{ $item->nama_barang }}
                                </option>
                            @endforeach
                        </select>
                        @error('barang_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="harga_satuan_terima" class="form-label">Harga Satuan Terima</label>
                        <input type="number" name="harga_satuan_terima"
                            class="form-control @error('harga_satuan_terima') is-invalid @enderror"
                            value="{{ old('harga_satuan_terima') }}" autocomplete="off" required>
                        @error('harga_satuan_terima')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jumlah_terima" class="form-label">Jumlah Terima</label>
                        <input type="number" name="jumlah_terima"
                            class="form-control @error('jumlah_terima') is-invalid @enderror"
                            value="{{ old('jumlah_terima') }}" autocomplete="off" required>
                        @error('jumlah_terima')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="penerimaan_id" class="form-label">Penerimaan ID</label>
                        <select name="penerimaan_id" class="form-control @error('penerimaan_id') is-invalid @enderror"
                            required>
                            <option value="" disabled selected>Pilih Penerimaan</option>
                            @foreach ($penerimaan as $item)
                                <option value="{{ $item->penerimaan_id }}"
                                    {{ old('penerimaan_id') == $item->penerimaan_id ? 'selected' : '' }}>
                                    Penerimaan ID: {{ $item->penerimaan_id }}
                                </option>
                            @endforeach
                        </select>
                        @error('penerimaan_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection