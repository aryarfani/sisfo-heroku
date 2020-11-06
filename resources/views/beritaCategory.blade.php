@extends('../layouts/master')

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
                            <a href="#">Kategori Berita</a>
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
    <a href="{{ action('BeritaCategoryController@create')}}" type="button" class="btn btn-success mb-3"><i class="mdi mdi-plus-circle"></i> Add New</a>
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Created Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($beritaCategory as $b )
            <tr>
                <th scope="row">{{$loop->index}}</th>
                <td>{{$b->name}}</td>
                <td>{{$b->created_at}}</td>
                <td>
                    <a href="{{action('BeritaCategoryController@edit', [$b->id])}}" type="button" class="btn btn-warning btn-block mb-2"><i class="mdi mdi-update"></i>Edit</a>
                    <form action="{{ url('/berita-kategori', [$b->id]) }}" method="POST">
                        <input class="btn btn-danger btn-block" type="submit" value="Delete">
                        <input type="hidden" name="_method" value="delete" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                    {{--                    <a href="{{ url('/dashboard', ['id' => $b->id]) }}" type="button" class="btn btn-danger btn-block"><i class="mdi mdi-delete"></i>Delete</a>--}}
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
