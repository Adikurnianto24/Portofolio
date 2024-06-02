<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomeController extends Controller
{
    public function someMethod()
    {
        $user = auth()->user();
        return view('some.view', compact('user'));
    }
}