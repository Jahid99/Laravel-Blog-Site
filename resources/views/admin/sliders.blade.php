@extends('admin.layouts.master')

    @section('content')

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Sliders</small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>no</th>
                                <th>image</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $slider)
                              <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="../assets/img/slider/{{ $slider->image }}" alt="" height="100" width="100"/></td>
                                <td><a href="{{ route('slider.edit', $slider->id) }}">Edit</a> || <a href="{{ route('slider.destroy', $slider->id) }}">Delete</a></td>
                              </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

    @endsection