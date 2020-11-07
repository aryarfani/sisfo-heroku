@extends('../layouts/master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-header py-3">
                <h4 class="card-title text-center">Edit Dashboard</h4>
            </div>
            <div class="card card-body">
                <form class="form-horizontal m-t-30" action="{{ url('/user', [$data->id]) }}" method="POST" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                    <input type="hidden" class="form-control" name="title" value="{{ $data->id }}">
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="number" class="form-control" name="nik" value="{{ $data->nik }}">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ $data->nama }}">
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <select name="pekerjaan" class="form-control">
                            <option value="Swasta" {{ $data->pekerjaan == "Swasta" ? 'selected' : '' }}>Swasta</option>
                            <option value="Mahasiswa" {{ $data->pekerjaan == "Mahasiswa" ? 'selected' : '' }}>Mahasiswa</option>
                            <option value="PNS" {{ $data->pekerjaan == "PNS" ? 'selected' : '' }}>PNS</option>
                            <option value="Petani" {{ $data->pekerjaan == "Petani" ? 'selected' : '' }}>Petani</option>
                            <option value="Lain-lain" {{ $data->pekerjaan == "Lain-lain" ? 'selected' : '' }}>Lain-lain</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select name="agama" class="form-control">
                            <option value="Islam" {{ $data->agama == "Islam" ? 'selected' : '' }}>Islam</option>
                            <option value="Kristen" {{ $data->agama == "Kristen" ? 'selected' : '' }}>Kristen</option>
                            <option value="Katolik" {{ $data->agama == "Katolik" ? 'selected' : '' }}>Katolik</option>
                            <option value="Hindu" {{ $data->agama == "Hindu" ? 'selected' : '' }}>Hindu</option>
                            <option value="Budha" {{ $data->agama == "Budha" ? 'selected' : '' }}>Budha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $data->alamat }}">
                    </div>
                    <div class="form-group">
                        <label>Nomer Hp (wa)</label>
                        <input type="text" class="form-control" name="nomer_hp" value="{{ $data->nomer_hp }}">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="Belum Kawin" {{ $data->status == "Belum Kawin" ? 'selected' : '' }}>Belum Kawin</option>
                            <option value="Kawin" {{ $data->status == "Kawin" ? 'selected' : '' }}>Kawin</option>
                            <option value="Cerai Mati" {{ $data->status == "Cerai Mati" ? 'selected' : '' }}>Cerai Mati</option>
                            <option value="Cerai Hidup" {{ $data->status == "Cerai Hidup" ? 'selected' : '' }}>Cerai Hidup</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="1" {{ $data->jenis_kelamin == "1" ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="0" {{ $data->jenis_kelamin == "0" ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="alert alert-danger">
                        Isi form di bawah ini hanya bila Anda hendak mengubah password atau gambar User
                    </div>
                    <input type="hidden" class="form-control" name="password" value="{{ $data->password }}">
                    <input type="hidden" class="form-control" name="gambar" value="{{ $data->gambar }}">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="new_password">
                    </div>
                    <div class="form-group">
                        <label>Upload Gambar</label><br>
                        <input type="file" class="form-control" name="new_gambar">
                    </div>
                    <button type="submit" class="btn btn-warning"> Update </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
