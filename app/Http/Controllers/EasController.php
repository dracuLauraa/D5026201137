<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EasController extends Controller
{
    public function index(Request $request)
    {
        $pagecounter = DB::table('pagecounter')->paginate(2);

        DB::table('pagecounter')->insert([
            'Jumlah' => $request->Jumlah+1
        ]);

    	return view('eas',['pagecounter' => $pagecounter]);

    }
}