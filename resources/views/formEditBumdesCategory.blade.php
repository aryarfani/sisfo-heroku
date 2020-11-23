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
                <form class="form-horizontal m-t-30" action="{{url('/bumdes-kategori',[$data->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
