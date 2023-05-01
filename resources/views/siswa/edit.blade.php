@extends('layout/app')

@section('konten')
<a href='/siswa' class="btn btn-secondary"><< Kembali </a>
<form method="post" action={{'/siswa/'.$data->nomor_induk}}>
    @csrf
    @method('put')
    <div class="mb-3">
      <h1> Nomor Induk: {{ $data->nomor_induk}}</h1>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">nama</label>
        <input type="text" class="form-control" name='nama' id="nama" value="{{ $data->nama }}">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">alamat</label>
        <textarea class="form-control" name='alamat'>{{$data->alamat}}</textarea>
      </div>
      <div class="mb-3"> </div>
        <button type="submit" class="btn btn-primary">PERBARUI</button>
</form>
@endsection