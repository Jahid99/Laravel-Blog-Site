@extends('admin.layouts.master')

    @section('content')

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Edit Post</small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <form action="{{ route('post.update', $blogpost->id) }}" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Title:</label>
                                <input type="text"  name="title" value="{{$blogpost->title}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Slug:</label>
                                <input type="text" name="slug" value="{{$blogpost->slug}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                 <textarea name="body" id="editor1" rows="10" cols="80" required>
                                    {{$blogpost->body}}
                                </textarea>
                            </div>

                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PUT">

                            <input type="submit" class="btn btn-default">
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

                    </div>
                </div>
                <!-- /.row -->
    @endsection