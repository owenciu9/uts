@extends('layout/app')

@section('konten')
    <a href="/siswa/create" class="btn btn-primary"> +Tambah Data Penduduk </a>
    <table class="table">
        <thead>
            <tr>
                <th> Nomor Induk</th>
                <th> Nama</th>
                <th> Alamat</th>
                <th> Aksi</th>

            </tr>

        </thead>

        <tbody>
            @foreach ($data as $item)
                <tr>

                    <td> {{$item->nomor_induk}} </td>
                    <td> {{$item->nama}} </td>
                    <td> {{$item->alamat}} </td>
                    <td> <a class='btn btn-secondary btn-sm' href='{{ url('/siswa/'.$item->nomor_induk)}}'>Detail</a>
                         <a class='btn btn-warning btn-sm' href='{{ url('/siswa/'.$item->nomor_induk.'/edit')}}'>Edit</a>
                         <form onsubmit="return confirm('Konfirmasi Penghapusan data!!')"class='d-inline' action={{'/siswa/'.$item->nomor_induk}} method='post'> 
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">hapus</button>
                        </form>
                    
                    
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>>
    {{ $data->links()}}
@endsection