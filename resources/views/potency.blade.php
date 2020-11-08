@extends('../layouts/master')

@section('content')

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <a href="{{ action('PotencyController@create')}}" type="button" class="btn btn-success mb-3"><i class="mdi mdi-plus-circle"></i> Add New</a>
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Category</th>
                <th scope="col">Create Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($potency as $key => $b )
            <tr>
                <th scope="row">{{($potency->currentpage()-1) * $potency->perpage() + $key + 1}}</th>
                <td style="width: 200px;"><img src="{{$b->image}}" style="width: 100px; height: 100px"></td>
                <td>{{$b->title}}</td>
                <td>{{$b->address}}</td>
                <td>{{$b->category->name}}</td>
                <td>{{$b->created_at}}</td>
                <td class="d-flex ">
                    <div class="mr-1">
                        <a class=" btn btn-warning px-3" href="{{ url('/potensi', [$b->id]) }}" type="button">Edit</a>
                    </div>
                    <div class="ml-1">
                        <form action="{{ url('/potensi', [$b->id]) }}" method="POST">
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
        {!! $potency->links() !!}
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
@endsection
