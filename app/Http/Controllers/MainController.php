<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Método index.
     */
    public function index($value)
    {
        // echo "Hello World! - Index method";
        return view('main', [
            'value' => $value
        ]);
    }

    public function page2($value)
    {
        return view('page2', [
            'value' => $value
        ]);
    }

    public function page3($value)
    {
        return view('page3', [
            'value' => $value
        ]);
    }
}
