@extends('template')
@section('content')
<div class="container">
    <form method="post" action="formulir/form">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
        Nama Mahasiswa : <input class="form-control mt-2" type="text" name="nama"><br />

        Jenis Kelamin : <br />
        <div class="mt-2 mb-2">
            <input class="form-check-input" type="radio" id="L" name="jenis_kelamin" value="L">
            <label for="L">Laki-laki</label>
            <input class="form-check-input " type="radio" name="jenis_kelamin" id="P" value="P">
            <label for="P">Perempuan</label> <br />
        </div>

        Agama : <select class="input-group mb-3 mt-2" name="agama" id="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Khongucu">Khongucu</option>
        </select> <br />

        Telepon : <input class="form-control mt-2" type="text" name="telp"> <br />

        Alamat : <input class="form-control mt-2" type="text" name="alamat"> <br />

        Hobi : <br />
        <div class="mt-2 mb-4">
            <input class="form-check-input" type="radio" name="hobi" value="olaharaga"> <a> Olaharaga </a>
            <input class="form-check-input" type="radio" name="hobi" value="membaca"> <a> Membaca </a>
            <input class="form-check-input" type="radio" name="hobi" value="main musik"> <a> Main Musik </a> <br />
        </div>
        Jurusan :

        <select class="input-group mb-3 mt-2 " name="jurusan" id="jurusan">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
            <option value="Teknik Kimia">Teknik Kimia</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
        </select> <br />
        Bidang Minat : <br />
        <div class="mt-2"> <input type="radio" name="bidang_minat" value="Pemograman"> Pemograman
            <input class="form-check-input" type="radio" name="bidang_minat" value="Mulrimedia"> Multimedia
            <input class="form-check-input" type="radio" name="bidang_minat" value="Teknisi dan Jaringan"> Teknisi dan jaringan<br />
            <button class="btn btn-success mt-4" type="submit" value="Simpan">Simpan</button>
        </div>
    </form>
</div>
@endsection