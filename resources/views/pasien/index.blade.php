@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-3">
            <a href="{{route('pasien.create')}}" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card">
                <div class="card-header">Pasien</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Berobat</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $p)
                            <tr>
                                <td>{{$p->nik}}</td>
                                <td>{{$p->nama_pasien}}</td>
                                <td>@if($p->jenis_kelamin === 'L')
                                    Laki-laki
                                    @elseif($p->jenis_kelamin === 'P')
                                    Perempuan
                                    @endif
                                </td>
                                <td>{{$p->umur}}</td>
                                <td><a href="{{route('pasien.show',$p)}}" class="btn btn-primary">Berobat</a></td>
                                <td>
                                    <form action="{{route('pasien.destroy',$p)}}" method="post">
                                        <a href="{{route('pasien.edit',$p)}}" class="btn btn-warning">Edit</a>
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