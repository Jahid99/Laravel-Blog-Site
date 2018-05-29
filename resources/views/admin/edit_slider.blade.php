@extends('admin.layouts.master')

    @section('content')

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Edit Slider Image</small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <form action="{{ route('slider.update', $slider->id) }}" method="post" enctype="multipart/form-data">

                           <div class="form-group">
                                <label>File Upload</label>
                                <input name="image" type="file">
                            </div>

                            <img src="../assets/img/slider/{{ $slider->image }}" alt="" height="100" width="100"/><br><br>

                           
                         
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PUT">

                            <input type="submit" class="btn btn-default">
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>
                        
                    </div>
                </div>
                <!-- /.row -->

    @endsection