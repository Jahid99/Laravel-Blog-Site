@extends('admin.layouts.master')

    @section('content')

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
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
                                <th>Text</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                           @foreach($texts as $text)
                              <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $text->text }}</td>
                                
                                <td><a href="{{ route('admin.textedit', $text->id) }}">Edit</a></td>
                              </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
    @endsection