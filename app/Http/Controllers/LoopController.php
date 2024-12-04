<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopController extends Controller
{
    public function forLoop()
    {
        return view('loops.for');
    }

    public function whileLoop()
    {
        return view('loops.while');
    }

    public function doWhileLoop()
    {
        return view('loops.do-while');
    }

    public function foreachLoop()
    {
        return view('loops.foreach');
    }
}
