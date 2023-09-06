@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Pasien</div>

                <div class="card-body">
                    <form method="POST" action="{{route('pasien.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Pasien</label>
                            <input type="text" name="nama" class="form-control" placeholder="Adi">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-control">
                                <option value="pria">Laki-Laki</option>
                                <option value="wanita">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Umur</label>
                            <input type="number" name="umur" class="form-control" placeholder="20">
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