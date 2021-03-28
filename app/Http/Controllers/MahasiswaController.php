<?php
// Rizki Fauzian R (1903040168)
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use SebastianBergmann\CodeUnit\FunctionUnit;

class MahasiswaController extends Controller
{
    public function formulir()
    {
        return view('formulir');
    }
    public function dataMahasiswa()
    {
        //koneksi ke database dengan nama data_1903040168
        $mahasiswa = DB::table('mahasiswa')->get();
        // kirim database ke view
        return view('dataMahasiswa', ['mahasiswa' => $mahasiswa]);
    }
    public function formulirbt()
    {
        return view('formulirbt');
    }
    public function form(Request $data)
    {
        DB::table('mahasiswa')->insert([
            'nama' => $data->nama,
            'jenis_kelamin' => $data->jenis_kelamin,
            'agama' => $data->agama,
            'telepon' => $data->telp,
            'alamat' => $data->alamat,
            'hobi' => $data->hobi,
            'jurusan' => $data->jurusan,
            'bidang_minat' => $data->bidang_minat
        ]);

        return redirect('/data-mahasiswa');
    }

    public function hapus($id)
    {

        DB::table('mahasiswa')->where('no', $id)->delete();


        return redirect('/data-mahasiswa');
    }
}
