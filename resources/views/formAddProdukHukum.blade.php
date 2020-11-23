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
                <form class="form-horizontal m-t-30" action="{{ url('/produk-hukum') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Uraian</label>
                        <input type="text" class="form-control" name="uraian">
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="number" class="form-control" name="tahun">
                    </div>
                    <div class="form-group">
                        <label>Tentang</label>
                        <input type="text" class="form-control" name="tentang">
                    </div>
                    <div class="form-group">
                        <label>Upload Document PDF</label>
                        <input type="file" class="form-control" name="pdf">
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
