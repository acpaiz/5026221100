<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeyboardDBController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); //hasilnya adalah array 2D, ini langsung manggil nama table //jika tidak menggunakan pagination
        $keyboard = DB::table('keyboard')->paginate(10);
    	// mengirim data pegawai ke view index
    	return view('keyboard',['keyboard' => $keyboard]);

    }

    // method untuk menampilkan view form tambah pegawai
public function tambah()
{

	// memanggil view tambah
	return view('tambahkeyboard');

}

// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('keyboard')->insert([
		'merkkeyboard' => $request->merk,
		'stockkeyboard' => $request->stock,
        'tersedia' => $request->status
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/keyboard');

}

// method untuk edit data pegawai
public function edit($kodekeyboard)
{
	// mengambil data pegawai berdasarkan id yang dipilih
    //SELECT * FROM pegawai WHERE pegawai_id = x
	$keyboard = DB::table('keyboard')->where('kodekeyboard','=',$kodekeyboard)->get(); //PENTING!
    //$pegawai = DB::table('pegawai')->get(); //hasilnya array 2D
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editkeyboard',['keyboard' => $keyboard]);

}

// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('keyboard')->where('kodekeyboard',$request->kodekeyboard)->update([
		'merkkeyboard' => $request->merk,
		'stockkeyboard' => $request->stock,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/keyboard');
}

// method untuk hapus data pegawai
    public function hapus($kodekeyboard)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('keyboard')->where('kodekeyboard',$kodekeyboard)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/keyboard');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$keyboard = DB::table('keyboard')
		->where('merkkeyboard','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('keyboard',['keyboard' => $keyboard]);

	}

        public function updateStatus($kodekeyboard, Request $request)
    {
        // Fetch the keyboard data by kodekeyboard
        $keyboard = DB::table('keyboard')->where('kodekeyboard', $kodekeyboard)->first();

        if ($keyboard) {
            // Update the 'tersedia' value based on checkbox status
            DB::table('keyboard')->where('kodekeyboard', $kodekeyboard)->update([
                'tersedia' => $request->has('tersedia') ? 1 : 0
            ]);

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Status updated successfully!');
        }

        return redirect()->back()->with('error', 'Keyboard not found!');
    }

}
