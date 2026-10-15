<?php

namespace App\Http\Controllers;
use App\Models\Rute;
use Illuminate\Http\Request;

class RuteController extends Controller
{
    public function index()
    {
       $ruteList = Rute::all();
        
       return view('rute.index', compact('ruteList'));
    }
}