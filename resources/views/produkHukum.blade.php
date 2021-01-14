@extends('../layouts/master')
@section('search', true)
@section('content')
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <a href="{{ action('ProdukHukumController@create')}}" type="button" class="btn btn-success mb-3"><i class="mdi mdi-plus-circle"></i> Add New</a>
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Document</th>
                <th scope="col">Uraian</th>
                <th scope="col">Tahun</th>
                <th scope="col">Tentang</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produkHukum as $key => $b )
            <tr>
                <th scope="row">{{($produkHukum->currentpage()-1) * $produkHukum->perpage() + $key + 1}}</th>

                <td><a class=" btn btn-warning px-3" href="{{ url($b->pdf) }}" target="blank" type="button">Buka</a></td>
                <td>{{$b->uraian}}</td>
                <td>{{$b->tahun}}</td>
                <td>{{$b->tentang}}</td>
                <td class="d-flex ">
                    <div class="mr-1">
                        <a class=" btn btn-warning px-3" href="{{ url('/produk-hukum', [$b->id]) }}" type="button">Edit</a>
                    </div>
                    <div class="ml-1">
                        <form action="{{ url('/produk-hukum', [$b->id]) }}" method="POST">
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
        {!! $produkHukum->links() !!}
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
@endsection
