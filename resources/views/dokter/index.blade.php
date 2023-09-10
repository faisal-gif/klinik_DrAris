@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-3">
                <a href="{{route('dokter.create')}}" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card">
                <div class="card-header">Dokter</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NIP</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Umur</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{$d->nip}}</td>
                                <td>{{$d->nama_dokter}}</td>
                                <td>@if($d->jenis_kelamin === 'L')
                                    Laki-laki
                                    @elseif($d->jenis_kelamin === 'P')
                                    Perempuan
                                    @endif
                                </td>
                                <td>{{$d->umur}}</td>
                                <td>{{$d->no_hp}}</td>

                                <td>
                                    <form action="{{route('dokter.destroy',$d)}}" method="post">
                                        <a href="{{route('dokter.edit',$d)}}" class="btn btn-warning">Edit</a>
                                        |
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" class="btn btn-danger" style="color: white;">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection