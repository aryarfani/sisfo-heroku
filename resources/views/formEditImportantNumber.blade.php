@extends('../layouts/master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-header py-3">
                <h4 class="card-title text-center">Add New</h4>
            </div>
            <div class="card card-body">
                <form class="form-horizontal m-t-30" action="{{ url('/nomer-penting', [$data->id]) }}" method="POST" enctype="multipart/form-data">
                    {{ method_field('PUT') }}

                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="address" value="{{ $data->address }}">
                    </div>
                    <div class="form-group">
                        <label>No. Telp</label>
                        <input type="text" class="form-control" name="phone" value="{{ $data->phone }}">
                    </div>
                    <button type="submit" class="btn btn-success"> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
