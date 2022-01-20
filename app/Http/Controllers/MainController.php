<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;

class MainController extends Controller
{
    public function index() {
        $new_advertisements = Advertisement::latest()->take(16)->get();
        return view('welcome', compact('new_advertisements'));
    }
}
