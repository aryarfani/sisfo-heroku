@extends('../layouts/master')

@section('content')

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <a href="{{ action('PotencyCategoryController@create')}}" type="button" class="btn btn-success mb-3"><i class="mdi mdi-plus-circle"></i> Add New</a>
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
            @foreach($potencyCategory as $key => $b )
            <tr>
                <th scope="row">{{($potencyCategory->currentpage()-1) * $potencyCategory->perpage() + $key + 1}}</th>
                <td>{{$b->name}}</td>
                <td>{{$b->created_at}}</td>
                <td class="d-flex">
                    <div class="mx-1">
                        <a class=" btn btn-warning px-3" href="{{ url('/potensi-kategori', [$b->id]) }}" type="button">Edit</a>
                    </div>
                    <div class="ml-1">
                        <form action="{{ url('/potensi-kategori', [$b->id]) }}" method="POST">
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
        {!! $potencyCategory->links() !!}
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
@endsection
