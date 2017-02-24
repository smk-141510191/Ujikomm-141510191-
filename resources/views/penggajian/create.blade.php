@extends('layouts.app')

@section('content')
	
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">Tambah Data Penggajian</div>
		<div class="panel-body">
			<form method="POST" action="{{url('penggajian')}}">
			 	{{csrf_field()}}
      
                    <div class="control-group">
                        <label class="control-label">Kode Tunjangan Pegawai</label>
                        <div class="controls">
                            <select class="form-control" name="kode_tunjangan_id">
                                @foreach ($tunjanganpegawai as $data)
                                <option value="{{ $data->id }}">{{ $data->kode_tunjangan_id }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Jumlah Jam Lembur</label>
                        <div class="controls">
                            <select class="form-control" name="jumlah_jam">
                                @foreach ($lemburpegawai as $data)
                                <option value="{{ $data->id }}">{{ $data->jumlah_jam }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    </div>
                    
				 <div class="control-group">
                        <label class="control-label">Jumlah Uang Lembur</label>
                        <div class="controls">
                            <select class="form-control" name="besaran_uang">
                                @foreach ($kategori as $data)
                                <option value="{{ $data->id }}">{{ $data->besaran_uang }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    </div>
                <div class="form-group">
                    <label>Gaji Pokok</label>
                    <input class="form-control" type="text" name="gaji_pokok" placeholder="Masukkan Gaji Pokok">
                </div>

                 <div class="form-group">
                    <label>Total Gaji</label>
                    <input class="form-control" type="text" name="total_gaji">
                </div>

                 <div class="form-group">
                    <label>Tanggal Pengambilan</label>
                    <input class="form-control" type="date" name="tanggal_pengambilan">
                </div>

                 <div class="form-group">
                    <label>Status Pengambilan</label>
                    <input class="form-control" type="text" name="status_pengambilan" placeholder="Masukkan Status Pengambilan">
                </div>

                 <div class="form-group">
                    <label>Petugas Penerima</label>
                    <input class="form-control" type="text" name="petugas_penerima" placeholder="Masukkan Tugas Penerima">
                </div>

				<div class="form-group">
					<input class="btn btn-success" type="submit" name="submit" value="Tambah">
				</div>
			</form>
		</div>
	</div>
</div>

@stop