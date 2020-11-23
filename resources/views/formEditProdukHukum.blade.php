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
                <form class="form-horizontal m-t-30" action="{{ url('/produk-hukum',[$data->id]) }}" method="POST" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="form-group">
                        <label>Uraian</label>
                        <input type="text" class="form-control" name="uraian" value="{{ $data->uraian }}">
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="text" class="form-control" name="tahun" value="{{ $data->tahun }}">
                    </div>
                    <div class="form-group">
                        <label>Tentang</label>
                        <input type="text" class="form-control" name="tentang" value="{{ $data->tentang }}">
                    </div>
                    <div class="alert alert-danger">
                        Isi form di bawah ini hanya bila Anda hendak mengubah document
                    </div>
                    <div class="form-group">
                        <label>Upload Gambar</label><br>
                        <input type="file" class="form-control" name="pdf">
                    </div>
                    <button type="submit" class="btn btn-success"> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
