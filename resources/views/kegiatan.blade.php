@extends('user_master')

@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Basic Table</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    {{-- <a href="{{ action('UserController@create') }}" type="button" class="btn btn-success mb-3"><i class="mdi mdi-plus-circle"></i> Add New</a> --}}
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Pengunggah</th>
                <th scope="col">Nama kegiatan</th>
                <th scope="col">Tempat kegiatan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $b )
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td style="width: 200px;"><img src="{{ $b->gambar }}" style="width: 170px;  object-fit: cover "></td>
                    <td>{{ $b->user->nama }}</td>
                    <td>{{ $b->nama }}</td>
                    <td>{{ $b->tempat }}</td>
                    <td>{{ $b->created_at }}</td>
                    <td>
                        {{-- <a href="{{ url('/kegiatan', [$b->id]) }}" type="button" class="btn btn-warning btn-block mb-2"><i class="mdi mdi-update"></i>Edit</a> --}}
                        <form action="{{ url('/kegiatan', [$b->id]) }}" method="POST">
                            <input class="btn btn-danger btn-block" type="submit" value="Delete">
                            <input type="hidden" name="_method" value="delete" />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
@endsection
