@extends('../layouts/master')
@section('search', true)
@section('content')
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    {{-- <a href="{{ action('UserController@create') }}" type="button" class="btn btn-success mb-3"><i class="mdi mdi-plus-circle"></i> Add New</a> --}}
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Status</th>
                <th scope="col">Gambar</th>
                <th scope="col">Pengunggah</th>
                <th scope="col">Nama kegiatan</th>
                <th scope="col">Tempat kegiatan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $b )
            <tr>
                <th scope="row">{{ ($data->currentpage()-1) * $data->perpage() + $key + 1 }}</th>
                <td>{!! $b["is_approved"] == "0" ?
                    '<span class="badge badge-info font-weight-bold">Menunggu <br> Konfirmasi</span>'
                    :
                    '<span class="font-weight-bold badge badge-success">Sudah <br> Dikonfirmasi</span>'
                    !!}</td>
                <td><img src="{{ $b->gambar }}" class="img-fluid" style=" height: 100px"></td>
                <td>{{ $b->user->nama }}</td>
                <td>{{ $b->nama }}</td>
                <td>{{ $b->tempat }}</td>
                <td>{{ $b->created_at }}</td>
                <td class="d-flex ">
                    @if($b["is_approved"] == "0")
                    <div class="mr-1">
                        <a href="{{ url('/kegiatan/'. $b["id"]).'/approve' }}" type="button" class="btn btn-success">Approve</a>
                    </div>
                    @endif
                    <div class=" ml-1">
                        <form action="{{ url('/kegiatan', [$b->id]) }}" method="POST">
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
        {!! $data->links() !!}
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
@endsection
