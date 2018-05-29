@extends('layouts.master')

    @section('content')
    
        <div id="banners"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9"> 
                    <div class="blog-post">
                        <h1 class="blog-title">         
                            <h2>{!! $post->title !!}</h2>
                        </h1>
                       
                        <p>
                            {!! $post->body !!}
                        </p>
                        <div>
                            <span class="badge">Posted 2012-08-02 20:47:04</span>
                                   
                        </div>
                    </div>
                    <hr>
                    <div class="row">
       
                     </div>
                </div>
            </div>
        </div>

        @endsection