<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PwebController extends Controller
{

	public function week1(){
		return view('intro');
	}

    public function week2(){
		return view('style');
	}

    public function week3(){
		return view('responsive');
	}

    public function tugas1(){
		return view('tugas1');
	}

    public function tugas2(){
		return view('tugas2');
	}

}
