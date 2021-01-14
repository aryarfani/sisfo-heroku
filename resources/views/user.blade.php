@extends('../layouts/master')
@section('search', true)
@section('content')
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <a href="{{ action('UserController@create') }}" type="button" class="btn btn-success mb-3"><i class="mdi mdi-plus-circle"></i> Tambah Baru </a>
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
        Import User
    </button>
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">No Handphone</th>
                <th scope="col">Tanggal dibuat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $key => $b )
            <tr>
                <th scope="row">{{ ($user->currentpage()-1) * $user->perpage() + $key + 1 }}</th>
                <td><img src="{{ $b->gambar ?? 'assets\images\home\user-no-image.jpg' }}" class="img-fluid" style=" height: 70px"></td>
                <td>{{ $b->nik }}</td>
                <td>{{ $b->nama }}</td>
                <td>{{ $b->nomer_hp }}</td>
                <td>{{ $b->created_at }}</td>

                <td class="d-flex ">
                    <div class="mr-1">
                        <a class=" btn btn-warning px-3" href="{{ url('/user', [$b->id]) }}" type="button">Edit</a>
                    </div>
                    <div class="ml-1">
                        <form action="{{ url('/user', [$b->id]) }}" method="POST">
                            <input class="btn btn-danger btn-block" type="submit" value="Delete">
                            <input type="hidden" name="_method" value="delete" />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $user->links() !!}
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ url('/user/import') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <p>NB: Semua user yang diimport akan mempunyai password desa123</p>
                    <div class="form-group">
                        <input type="file" name="import" id="import" required="required">
                    </div>
                    <br>
                    <a href="{{ url('assets\sample\FormatImportWarga.xlsx') }}">Unduh Contoh Format</a>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
@endsection
