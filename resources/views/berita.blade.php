@extends('../layouts/master')

@section('content')

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <a href="{{ action('BeritaController@create')}}" type="button" class="btn btn-success mb-3"><i class="mdi mdi-plus-circle"></i> Add New</a>
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Visitor</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Create Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($berita as $key => $b )
            <tr>
                <th scope="row">{{($berita->currentpage()-1) * $berita->perpage() + $key + 1}}</th>
                <td>{{$b->title}}</td>
                <td>{{$b->author}}</td>
                <td>{{$b->visitor}}</td>
                <td style="width: 300px;">{{$b->content}}</td>
                <td style="width: 300px;"><img src="{{$b->image}}" style="width: 200px; height: 200px"></td>
                <td>{{$b->created_at}}</td>
                <td class="d-flex ">
                    <div class="mr-1">
                        <a class=" btn btn-warning px-3" href="{{ url('/berita', [$b->id]) }}" type="button">Edit</a>
                    </div>
                    <div class="ml-1">
                        <form action="{{ url('/berita', [$b->id]) }}" method="POST">
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
        {!! $berita->links() !!}
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
@endsection
