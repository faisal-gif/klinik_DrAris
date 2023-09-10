@extends('layouts.app')
@section('css')
@endsection
<style>
    th,
    td {
        padding-top: 5px;
        padding-left: 10px;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Berobat</div>

                <div class="card-body">
                    <form method="POST" action="{{route('berobat.store')}}">
                        @csrf
                        <input type="hidden" name="pasien" value="{{$pasien}}">
                        <div class="mb-3">
                            <label class="form-label">Dokter</label>
                            <select name="dokter" id="" class="form-control">
                                @foreach($dokter as $d)
                                <option value="{{$d->nip}}">{{$d->nama_dokter}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keluhan Pasien</label>
                            <textarea class="form-control" name="keluhan" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hasil Diagnosa</label>
                            <textarea class="form-control" name="diagnosa" rows="3"></textarea>
                        </div>
                        <div class="mb-2">
                            <h5>Resep Obat</h5>
                        </div>
                        <div class="mb-5">
                            <table style="padding-left: 10px;" id="dynamicAddRemove">
                                <tr>
                                    <th>Obat</th>
                                    <th>Dosis</th>
                                    <th>Aturan</th>
                                    <th>Jangka Waktu</th>
                                </tr>

                                <tr>
                                    <td>
                                        <select name="obat[0]" id="" class="form-control">
                                            @foreach($obat as $o)
                                            <option value="{{$o->kode}}">{{$o->nama_obat}}</option>
                                            @endforeach

                                        </select>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="dosis[0]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="aturan[0]">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="lama[0]">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" id="dynamic-ar">Tambah</button>
                                    </td>
                                </tr>

                            </table>
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
@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function() {
        ++i;
        $("#dynamicAddRemove").append('<tr id="child"><td><select name="obat['+i+']" id="" class="form-control">@foreach($obat as $o)<option value="{{$o->kode}}">{{$o->nama_obat}}</option>@endforeach</select></td><td><input type="number" class="form-control" name="dosis['+i+']"></td><td><input type="number" class="form-control" name="aturan['+i+']"></td><td><input type="number" class="form-control" name="lama['+i+']"></td><td><button type="button" class="btn btn-danger" id="remove">Delete</button></td></tr>');
    });
    $(document).on('click', '#remove', function() {
        $(this).parents('#child').remove();
    });
</script>
@endsection