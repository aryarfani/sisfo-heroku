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
                <form class="form-horizontal m-t-30" action="{{ url('/loker') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Pekerjaan</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label>Tempat</label>
                        <input type="text" class="form-control" name="place">
                    </div>
                    <div class="form-group">
                        <label>Nama Bisnis</label>
                        <input type="text" class="form-control" name="business_name">
                    </div>
                    <div class="form-group">
                        <label>Phone (Whatsapp)</label>
                        <input type="number" class="form-control" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Salary</label>
                        <input type="number" class="form-control" name="salary">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" name="description">
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
