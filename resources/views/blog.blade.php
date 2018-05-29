@extends('layouts.master')

    @section('content')

    <!-- End Header -->

    <!-- Main Container -->
    <div id="banners"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9"> 

                    @foreach($blogposts as $blogpost)

                    <div class="blog-post">
                        <h1 class="blog-title">
                            
                            <a href="viewpost/{!! $blogpost->slug !!}">{!! $blogpost->title !!}</a>
                        </h1>
                       
                        <p>
                            {{ substr(strip_tags($blogpost->body), 0, 250) }}{{ strlen(strip_tags($blogpost->body)) > 250 ? "..." : "" }}
                        </p>
                        <div>
                            <span class="badge">Posted 2012-08-02 20:47:04</span>
                                   
                        </div>
                    </div>
                    <hr>

                    @endforeach

                    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $blogposts->links() !!}
            </div>
        </div>
    </div>
                   
                </div>

                
            </div>
        </div>
       
        <!--End Main Container -->

        @endsection