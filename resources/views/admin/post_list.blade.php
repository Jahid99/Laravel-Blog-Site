@extends('admin.layouts.master')

    @section('content')
    
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Post List</small>
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
                                <th>No</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Body</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                           @foreach($blogposts as $blogpost)
                              <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $blogpost->title }}</td>
                                <td>{{ $blogpost->slug }}</td>
                                <td>{{ substr(strip_tags($blogpost->body), 0, 200) }}{{ strlen(strip_tags($blogpost->body)) > 200 ? "..." : "" }}</td>
                                
                                <td><a href="{{ route('post.edit', $blogpost->id) }}">Edit</a> || <a href="{{ route('post.destroy', $blogpost->id) }}">Delete</a></td>
                              </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection