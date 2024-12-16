<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagecounterController extends Controller
{
    public function index()
    {
        DB::table('pagecounter')->increment('jumlah');
        $counter = DB::table('pagecounter')->get();
        return view('pagecounter',['pagecounter' => $counter]);
    }


}
