@extends('../layouts/master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-header py-3">
                <h4 class="card-title text-center">Add New</h4>
            </div>
            <div class="card card-body">
                <form class="form-horizontal m-t-30" action="{{ url('/berita') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control" name="title" value="{{ $berita->id }}">

                    <select name="news_category" id="news_category" class="form-control">
                        <option value="">== Pilih Kategori Berita ==</option>
                        @foreach($beritaCategory as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $berita->id }}">
                    </div>
                    <div class="form-group">
                        <label>Isi Berita</label>
                        <textarea class="form-control" rows="5" name="content">{{ $berita->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <button type="submit" class="btn btn-success"> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
