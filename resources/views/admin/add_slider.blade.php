@extends('admin.layouts.master')

    @section('content')

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Add Slider</small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>File Upload</label>
                                <input name="image" value="{{ old('image') }}" type="file">
                            </div>
                         
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                            <input type="submit" class="btn btn-default">
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>
                        
                    </div>
                </div>
            
    @endsection