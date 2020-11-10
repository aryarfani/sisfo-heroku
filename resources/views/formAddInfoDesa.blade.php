@extends('../layouts/master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-header py-3">
                <h4 class="card-title text-center">Add New</h4>
            </div>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card card-body">
                <form class="form-horizontal m-t-30" action="{{ url('/info-desa') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Kepala Desa</label>
                        <input type="text" class="form-control" name="kepala_desa">
                    </div>
                    <div class="form-group">
                        <label>Gambar Kepala Desa</label>
                        <input type="file" class="form-control" name="gambar_kepala_desa">
                    </div>
                    <div class="form-group">
                        <label>Alamat Kepala Desa</label>
                        <input type="text" class="form-control" name="alamat_kepala_desa">
                    </div>
                    <div class="form-group">
                        <label>Nama Sekretaris</label>
                        <input type="text" class="form-control" name="sekretaris">
                    </div>
                    <div class="form-group">
                        <label>Nama Kaur Keuangan</label>
                        <input type="text" class="form-control" name="kaur_keuangan">
                    </div>
                    <div class="form-group">
                        <label>Nama Kaur Umum</label>
                        <input type="text" class="form-control" name="kaur_umum">
                    </div>
                    <div class="form-group">
                        <label>Nama Kaur Perencanaan</label>
                        <input type="text" class="form-control" name="kaur_perencanaan">
                    </div>
                    <div class="form-group">
                        <label>Nama Seksi Pemerintahan</label>
                        <input type="text" class="form-control" name="seksi_pemerintahan">
                    </div>
                    <div class="form-group">
                        <label>Nama Seksi Kesejahteraan</label>
                        <input type="text" class="form-control" name="seksi_kesejahteraan">
                    </div>
                    <div class="form-group">
                        <label>Nama Seksi Pelayanan</label>
                        <input type="text" class="form-control" name="seksi_pelayanan">
                    </div>
                    <div class="form-group">
                        <label>Nomor Pemdes</label>
                        <input type="number" class="form-control" name="nomor_pemdes">
                    </div>
                    <div class="form-group">
                        <label>Nomor BPD</label>
                        <input type="number" class="form-control" name="nomor_bpd">
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
