@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3 mx-3">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Pasien</h5>
                    <p class="card-text">Untuk Memanage data pasien dan memanaga data berobat pasien</p>
                    <a href="{{route('pasien.index')}}" class="btn btn-primary">Klik</a>
                </div>
            </div>
        </div>
        <div class="col-3 mx-3">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Dokter</h5>
                    <p class="card-text"><br>Untuk memanage data dokter </p>
                    <a href="{{route('dokter.index')}}" class="btn btn-primary">Klik</a>
                </div>
            </div>
        </div>
        <div class="col-3 mx-3">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Obat</h5>
                    <p class="card-text"><br>Untuk memanage data obat <br></p>
                    <a href="{{route('obat.index')}}" class="btn btn-primary">Klik</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection