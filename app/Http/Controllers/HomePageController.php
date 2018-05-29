<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Text;

use App\Slider;

class HomePageController extends Controller
{

	public function index()
    {
    	$texts = Text::all();
    	$sliders = Slider::all();
    	return view('homepage')->withTexts($texts)->withSliders($sliders);
    }
    
}
