@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Dokter</div>

                <div class="card-body">
                    <form method="POST" action="{{route('dokter.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Dokter</label>
                            <input type="text" name="nama" class="form-control" placeholder="Adi">
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