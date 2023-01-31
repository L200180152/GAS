<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewtampilanController extends Controller
{
    public function landingpage()
    {
        $data = [
            'judul' => 'GAS - Welcome'
        ];
        return view('landingpage', $data);
    }
}
