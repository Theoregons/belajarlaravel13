@extends('admin')
@section('main')
    <h2>Upload File</h2>
    <form class="d-flex" action="{{ route('upload.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlFile1">Pilih gambar</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <div class="d-flex align-items-center">
            <button class="btn btn-success">Simpan</button>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ 'storage/'.$item->image }}" width="300" alt=""></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
