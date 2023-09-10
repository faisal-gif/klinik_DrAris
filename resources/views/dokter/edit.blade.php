@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Dokter</div>

                <div class="card-body">
                    <form method="POST" action="{{route('dokter.update',$dokter)}}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="mb-3">
                            <label class="form-label">Nama Dokter</label>
                            <input type="text" name="nama" class="form-control" value="{{$dokter->nama_dokter}}" placeholder="Adi">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-control">
                                <option value="L" {{($dokter->jenis_kelamin === 'L') ? 'Selected' : ''}}>Laki-Laki</option>
                                <option value="P" {{($dokter->jenis_kelamin === 'P') ? 'Selected' : ''}}>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Umur</label>
                            <input type="number" name="umur" class="form-control" value="{{$dokter->umur}}" placeholder="20">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" id=""  rows="3">{{$dokter->alamat}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Hp</label>
                            <input type="number" name="no_hp" class="form-control" value="{{$dokter->no_hp}}" >
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