<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UASController extends Controller
{
    //
    public function index()
    {
    	$nilaikuliah = DB::table('nilaikuliah')->paginate(10);

    // Attach nilaihuruf to each record
    foreach ($nilaikuliah as $n) {
        $nilaiAngka = intval($n->NilaiAngka); // Convert NilaiAngka to integer

        // Determine nilaihuruf based on NilaiAngka
        if ($nilaiAngka <= 40) {
            $n->nilaihuruf = "D";
        } elseif ($nilaiAngka <= 70) {
            $n->nilaihuruf = "C";
        } elseif ($nilaiAngka <= 85) {
            $n->nilaihuruf = "B";
        } else {
            $n->nilaihuruf = "A";
        }
    }

    foreach ($nilaikuliah as $n) {
        // Convert NilaiAngka to an integer
        $bobotsksbefore = intval($n->NilaiAngka);

        // Calculate bobotsks
        $bobotsks = $bobotsksbefore * intval($n->SKS);

        // Dynamically add bobotsks property to the object
        $n->bobotsks = $bobotsks;
    }

    // Pass the modified data to the view
    return view('uas', ['nilaikuliah' => $nilaikuliah]);

    }

    // method untuk menampilkan view form tambah pegawai
public function tambah()
{

	// memanggil view tambah
	return view('uastambah');

}

// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('nilaikuliah')->insert([
		'NRP' => $request->NRP,
		'NilaiAngka' => $request->NilaiAngka,
        'SKS' => $request->SKS
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/uas');

}

}
