<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\Book;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function books()
    {
        $user = Auth::user();
        $books = Books::all();
        return view('book', compact('user', 'book'));
    }
}
