@extends('../layouts/master')
@section('search', true)
@section('content')

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <a href="{{ action('ImportantNumberController@create')}}" type="button" class="btn btn-success mb-3"><i class="mdi mdi-plus-circle"></i> Add New</a>
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No.telp</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($importantNumber as $key => $b )
            <tr>
                <th scope="row">{{($importantNumber->currentpage()-1) * $importantNumber->perpage() + $key + 1}}</th>
                <td>{{$b->name}}</td>
                <td>{{$b->address}}</td>
                <td>{{$b->phone}}</td>
                <td class="d-flex">
                    <div class="mr-1">
                        <a class=" btn btn-warning px-3" href="{{action('ImportantNumberController@edit', $b->id)}}" type="button">Edit</a>
                    </div>
                    <div class="ml-1">
                        <form action="{{ url('/nomer-penting', [$b->id]) }}" method="POST">
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
        {!! $importantNumber->links() !!}
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
@endsection
