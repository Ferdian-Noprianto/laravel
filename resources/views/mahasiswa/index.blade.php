@extends('template/main')

@section('tittle', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Daftar Mahasiswa</h1>
            <div class="row">
                <div class="col-10">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Email</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswa as $mhs)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$mhs->nama}}</td>
                                <td>{{$mhs->nim}}</td>
                                <td>{{$mhs->email}}</td>
                                <td>
                                    <a href="" class="badge badge-success">edit</a>
                                    <a href="" class="badge badge-danger">hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection