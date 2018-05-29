<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Storage;
use Image;
use Session;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
         $sliders = Slider::all();
         return view('admin.sliders')->withSliders($sliders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
                'image'         => 'required'
            ));
        $slider = new Slider();
        $slider->image = $request->input('image');
        if ($request->hasFile('image')) {
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('assets/img/slider/' . $filename);
          Image::make($image)->resize(1920, 1080)->save($location);
          $oldFilename = $slider->image;
          $slider->image = $filename;
          Storage::delete($oldFilename);
        }
        $slider->save();
        Session::flash('success', 'The slider was successfully saved!');
        return redirect()->route('admin.slider');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.edit_slider')->withSlider($slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);

        if ($request->hasFile('image')) {
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('assets/img/slider/' . $filename);
          Image::make($image)->resize(1920, 1080)->save($location);
          $oldFilename = $slider->image;
          $slider->image = $filename;
          Storage::delete($oldFilename);
        }
        $slider->save();
        Session::flash('success', 'The slider was successfully updated!');
        return redirect()->route('admin.slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        Session::flash('success', 'The slider is deleted successfully!');
        return redirect()->route('admin.slider');
    }
}
