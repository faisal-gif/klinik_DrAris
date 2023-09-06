@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Pasien</div>

                <div class="card-body">
                    <form method="POST" action="{{route('berobat.store')}}">
                        @csrf
                        <div class="mb-3">
                        <label class="form-label">Pasien</label>
                            <select name="jenis_kelamin" id="" class="form-control">
                                <option value="pria">Laki-Laki</option>
                                <option value="wanita">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Dokter</label>
                            <select name="jenis_kelamin" id="" class="form-control">
                                <option value="pria">Laki-Laki</option>
                                <option value="wanita">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keluhan Pasien</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hasil Diagnosa</label>
                            <textarea class="form-control" rows="3"></textarea>
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