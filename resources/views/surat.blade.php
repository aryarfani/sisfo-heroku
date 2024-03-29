@extends('../layouts/master')

@section('content')
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <form method="GET" action="{{ url('/surat') }}">
        <div class="form-group">
            <label>Date Range Picker</label>
            <div class="row">
                <div class="col-3">
                    <div class="input-group">
                        <input type="date" id="picker" name="start" class="form-control" required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="date" id="picker" name="end" class="form-control" required>
                    </div>
                </div>

                <div class="col">
                    <button class=" btn btn-primary ml-3" type="submit">
                        Cari
                    </button>
                </div>
            </div>
        </div>
    </form>
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
                <td class="d-flex">
                    @if($b["status_surat"] == "0")
                    <div class="mr-1">
                        <a href="{{ url('/'.Str::slug($b["jenis_surat"]), ['id' => $b["id"]]).'/finish' }}" type="button" class="btn btn-success">Selesai</a>
                    </div>
                    @endif
                    <div class="ml-1">
                        <a href="{{ url('/'.Str::slug($b["jenis_surat"]), ['id' => $b["id"]]) }}" type="button" class="btn btn-primary">Print</a>
                    </div>
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
