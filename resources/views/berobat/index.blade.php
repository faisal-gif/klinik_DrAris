@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pasien</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Diagnosa</th>
                                <th scope="col">Tanggal Berobat</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $b)
                            <tr>
                                <td>{{$b->nama_pasien}}</td>
                                <td>{{$b->jenis_kelamin}}</td>
                                <td>{{$b->umur}}</td>
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