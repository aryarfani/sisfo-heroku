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
                <form class="form-horizontal m-t-30" action="{{ url('/produk',[$data->id]) }}" method="POST" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                    <select name="product_category_id" class="form-control">
                        @foreach($productCategory as $id => $name)
                        <option value="{{ $id }}" {{ $data->product_category_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="5" name="address">{{ $data->address }}</textarea>
                    </div>
                    <div class="alert alert-danger">
                        Isi form di bawah ini hanya bila Anda hendak mengubah gambar
                    </div>
                    <div class="form-group">
                        <label>Upload Gambar</label><br>
                        <input type="file" class="form-control" name="new_image">
                    </div>
                    <input type="hidden" class="form-control" name="image" value="{{ $data->image }}">
                    <button type="submit" class="btn btn-success"> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
