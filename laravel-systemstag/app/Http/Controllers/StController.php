<?php

namespace App\Http\Controllers;

use App\Models\Dataslider;
use Illuminate\Http\Request;

class StController extends Controller
{
    public function index() {
        $datasliders = Dataslider::all();
        return view('index', compact('datasliders'));
    }

    public function about() {
        return view('about');
    }

    public function legal() {
        return view('legal');
    }
}
