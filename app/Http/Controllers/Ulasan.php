<?php

namespace App\Http\Controllers;

use App\Models\rc;
use Illuminate\Http\Request;

class Ulasan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ulasan');
    }

   
}
