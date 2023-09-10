@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-3">
                <a href="{{route('obat.create')}}" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card">
                <div class="card-header">Obat</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Kode Obat</th>
                                <th scope="col">Nama Obat</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $o)
                            <tr>
                                <td>{{$o->kode}}</td>
                                <td>{{$o->nama_obat}}</td>
                                <td>{{$o->kategori}}</td>
                                <td>{{$o->harga}}</td>
                                <td>
                                    <form action="{{route('obat.destroy',$o)}}" method="post">
                                        <a href="{{route('obat.edit',$o)}}" class="btn btn-warning">Edit</a>
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