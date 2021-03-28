@extends('template')
@section('content')
<div class="container">
    <form method="post" action="formulir/form">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
        Nama Mahasiswa : <input type="text" name="nama"><br />

        Jenis Kelamin : <input type="radio" id="L" name="jenis_kelamin" value="L">
        <label for="L">Laki-laki</label>
        <input type="radio" name="jenis_kelamin" id="P" value="Perempuan">
        <label for="P">Perempuan</label> <br />

        Agama : <select name="agama" id="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Khongucu">Khongucu</option>
        </select> <br />

        Telepon : <input type="text" name="telp"> <br />

        Alamat : <input type="text" name="alamat"> <br />

        Hobi : <input type="radio" name="hobi" value="olaharaga">Olaharaga
        <input type="radio" name="hobi" value="membaca">Membaca
        <input type="radio" name="hobi" value="main musik">Main Musik<br />

        Jurusan : <select name="jurusan" id="jurusan">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
            <option value="Teknik Kimia">Teknik Kimia</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
        </select> <br />
        Bidang Minat : <input type="radio" name="bidang_minat" value="Pemograman"> Pemograman
        <input type="radio" name="bidang_minat" value="Mulrimedia"> Multimedia
        <input type="radio" name="bidang_minat" value="Teknisi dan Jaringan"> Teknisi dan jaringan<br />
        <button type="submit" value="Simpan">Simpan</button>
    </form>
</div>
@endsection