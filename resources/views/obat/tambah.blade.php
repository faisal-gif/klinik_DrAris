@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Obat</div>

                <div class="card-body">
                    <form method="POST" action="{{route('obat.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Kode Obat*</label>
                            <input type="text" name="kode_obat" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Obat</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <input type="text" name="kategori" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection