@extends('layouts.app')
@section('content')
<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading">Edit Kategori Lembur</div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{route('kategori.update', $kategori->id)}}" method="POST">
                <input name="_method" type="hidden" value="PATCH">
                    {{csrf_field()}}
                    <div class="form-group{{ $errors->has('kode_lembur') ? ' has-error' : '' }}">
                            <label for="kode_lembur" class="col-md-4 control-label">Kode lembur :</label>
                                <div class="col-md-6">
                                    <input type="text" name="kode_lembur" value="{{$kategori->kode_lembur}}" class="form-control">
                                    
                    </div>
                    </div>
                    
                    <div class="form-group{{ $errors->has('id_jabatan') ? ' has-error' : '' }}">
                            <label for="id_jabatan" class="col-md-4 control-label">Nama Jabatan :</label>
                                <div class="col-md-6">
                                    <select name="id_jabatan" class="form-control">
                                @foreach ($jabatan as $data)
                                <option value="{{$data->id}}" <?php if ($data->id_jabatan==$data->id) {echo "selected";} ?>>{{$data->nama_jabatan}}</option>
                                @endforeach
                            </select>
                                   
                    </div>
                    </div>

                    <div class="form-group{{ $errors->has('id_golongan') ? ' has-error' : '' }}">
                            <label for="id_golongan" class="col-md-4 control-label">Nama Golongan :</label>
                                <div class="col-md-6">
                            <select name="id_golongan" class="form-control">
                                @foreach ($golongan as $data)
                                <option value="{{$data->id}}" <?php if ($data->id_golongan==$data->id) {echo "selected";} ?>>{{$data->nama_golongan}}</option>
                                @endforeach
                            </select>
                    </div>
                    </div>

                    <div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
                            <label for="besaran_uang" class="col-md-4 control-label">Besaran Uang :</label>
                                <div class="col-md-6">
                                    <input type="text" name="besaran_uang" value="{{$kategori->besaran_uang}}" class="form-control">
                                    @if ($errors->has('besaran_uang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('besaran_uang') }}</strong>
                                    </span>
                                @endif
                                </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4" >
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>


@endsection