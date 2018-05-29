<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Text;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $texts = Text::all();
        return view('admin.index')->withTexts($texts);
    }
    
}
