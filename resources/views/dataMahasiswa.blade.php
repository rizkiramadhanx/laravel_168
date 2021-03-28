@extends('template')
@section('content')
<div class="container">
    <table class="table">

        <thead class="thead-dark">
            <tr>
                <th scope="col" class="table-light"></th>
                <th scope="col" class="table-light">Nama</th>
                <th scope="col" class="table-light">Jenis Kelamin</th>
                <th scope="col" class="table-light">Agama</th>
                <th scope="col" class="table-light">No Telepon</th>
                <th scope="col" class="table-light">Alamat</th>
                <th scope="col" class="table-light">Hobi</th>
                <th scope="col" class="table-light">Jurusan</th>
                <th scope="col" class="table-light">Bidang Minat</th>
                <th scope="col" class="table-light">Aksi</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        @foreach ($mahasiswa as $data)
        <tbody>
            <tr>

                <th>{{$i}}</th>
                <th>{{$data->nama}}</th>
                <th>{{$data->jenis_kelamin}}</th>
                <th>{{$data->agama}}</th>
                <th>{{$data->telepon}}</th>
                <th>{{$data->alamat}}</th>
                <th>{{$data->hobi}}</th>
                <th>{{$data->jurusan}}</th>
                <th>{{$data->bidang_minat}}</th>
                <th><button class="btn btn-danger"><a href="/formulirbt/hapus/{{ $data->no }}">Hapus</a></button></th>
            </tr>
        </tbody>
        <?php $i++; ?>
        @endforeach
    </table>
</div>
@endsection