@extends('../layouts/master')

@section('content')
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <a href="{{ action('UserController@create') }}" type="button" class="btn btn-success mb-3"><i class="mdi mdi-plus-circle"></i> Add New</a>
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
                <td style="width: 200px;"><img src="{{ $b->gambar }}" style="width: 100px; height: 100px; object-fit: cover "></td>
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
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
@endsection
