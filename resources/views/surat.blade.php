@extends('../layouts/master')

@section('content')
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    {{-- <a href="{{ action('SuratKeteranganDomisiliController@create') }}" type="button" class="btn btn-success mb-3"><i class="mdi mdi-plus-circle"></i> Add New</a> --}}
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Pengirim</th>
                <th scope="col">Jenis Surat</th>
                <th scope="col">Tanggal Pembuatan</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $b )
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{ $b["user"]["nama"] }}</td>
                <td>{{ $b["jenis_surat"] }}</td>
                <td>{{ $b["created_at"] }}</td>
                <td>{!! $b["status_surat"] == "0" ? '<span class="badge badge-info font-weight-bold">DIPROSES</span>': '<span class="font-weight-bold badge badge-success">SELESAI</span>' !!}</td>
                <td>
                    @if($b["status_surat"] == "0")
                    <a href="{{ url('/'.Str::slug($b["jenis_surat"]), ['id' => $b["id"]]).'/finish' }}" type="button" class="btn btn-success btn-block mb-2"><i class="mdi mdi-print"></i>Selesai</a>

                    @endif
                    <a href="{{ url('/'.Str::slug($b["jenis_surat"]), ['id' => $b["id"]]) }}" type="button" class="btn btn-primary btn-block mb-2"><i class="mdi mdi-print"></i>Print</a>
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
