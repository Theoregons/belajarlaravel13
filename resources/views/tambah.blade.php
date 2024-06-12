@extends('admin')
@section('main')
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIS</label>
            <input type="number" name="nis" class="form-control @error('nis') is-invalid @enderror" id="exampleFormControlInput1" value="{{ old('nis') }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control  @error('nama') is-invalid @enderror" id="exampleFormControlInput1"  value="{{ old('nama') }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control  @error('alamat') is-invalid @enderror" id="exampleFormControlInput1"  value="{{ old('alamat') }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>
@endsection