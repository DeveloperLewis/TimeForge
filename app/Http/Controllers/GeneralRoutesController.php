<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralRoutesController extends Controller
{
    public function index()
    {
        return view('pages.general.index');
    }

    public function pricing()
    {
        return view('pages.general.pricing');
    }

    public function features()
    {
        return view('pages.general.features');
    }
}
