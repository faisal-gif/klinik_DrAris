@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-2">
                NIK : {{$pasien->nik}}
            </div>
            <div class="mb-2">
                Nama : {{$pasien->nama_pasien}}
            </div>
            <div class="mb-2">
                Jenis Kelamin : {{$pasien->jenis_kelamin}}
            </div>
            <div class="mb-2">
                Umur : {{$pasien->umur}}
            </div>
            <div class="mb-3">
                No Hp : {{$pasien->no_hp}}
            </div>

            <div class="mb-2">
                <a href="{{route('berobat-tambah',$pasien->nik)}}" class="btn btn-primary">Berobat</a>
            </div>
            <div class="mb-2">
                <h5>Riwayat Berobat</h5>
            </div>
            @foreach($pasien->berobat as $b)
            <div class="mb-2">
                <div class="card">
                    <div class="card-header">{{date('d M,Y', strtotime($b->tgl_berobat));}}</div>

                    <div class="card-body">
                        <div class="mb-2">
                            <h5>Keluhan Pasien</h5>
                            <p>{{$b->keluhan_pasien}}</p>
                        </div>
                        <div class="mb-2">
                            <h5>Hasil Diagnosa</h5>
                            <p>{{$b->hasil_diagnosa}}</p>
                        </div>
                        <div class="mb-2">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Obat</th>
                                        <th scope="col">Dosis</th>
                                        <th scope="col">Aturan Minum</th>
                                        <th scope="col">Lama</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($b->resep as $r)
                                   <tr>
                                    <td>{{$r->obat->nama_obat}}</td>
                                    <td>{{$r->dosis}} Ml</td>
                                    <td>{{$r->aturan_minum}} x Hari</td>
                                    <td>{{$r->lama}} Hari</td>
                                   </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection