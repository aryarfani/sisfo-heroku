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
                <form class="form-horizontal m-t-30" action="{{ url('/info-bpd') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Ketua</label>
                        <input type="text" class="form-control" name="ketua">
                    </div>
                    <div class="form-group">
                        <label>Wakil</label>
                        <input type="text" class="form-control" name="wakil">
                    </div>
                    <div class="form-group">
                        <label>Sekretaris</label>
                        <input type="text" class="form-control" name="sekretaris">
                    </div>
                    <div class="form-group">
                        <label>Anggota 1</label>
                        <input type="text" class="form-control" name="anggota1">
                    </div>
                    <div class="form-group">
                        <label>Anggota 2</label>
                        <input type="text" class="form-control" name="anggota2">
                    </div>
                    <div class="form-group">
                        <label>Anggota 3</label>
                        <input type="text" class="form-control" name="anggota3">
                    </div>
                    <div class="form-group">
                        <label>Anggota 4</label>
                        <input type="text" class="form-control" name="anggota4">
                    </div>
                    <div class="form-group">
                        <label>Anggota 5</label>
                        <input type="text" class="form-control" name="anggota5">
                    </div>


                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
