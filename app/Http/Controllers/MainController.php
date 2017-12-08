<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gal;

class MainController extends Controller
{
    public function itstart()
    {
    $gal = Gal::latest()
      ->get();
      return view('pages.itstart', compact('gal'));
    }
}
