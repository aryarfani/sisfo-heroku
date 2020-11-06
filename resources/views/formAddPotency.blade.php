@extends('../layouts/master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-header py-3">
                <h4 class="card-title text-center">Add New</h4>
            </div>

            @if(count($errors) > 0)
            <br>
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card card-body">
                <form class="form-horizontal m-t-30" action="{{ url('/potensi') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <select name="potency_category_id" id="potency_category_id" class="form-control">
                        <option value="">== Pilih Kategori Produk ==</option>
                        @foreach($potencyCategory as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="5" name="address"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <button type="submit" class="btn btn-success"> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
