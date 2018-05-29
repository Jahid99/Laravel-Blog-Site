@extends('layouts.master')

    @section('content')


    <!-- Begin #carousel-section -->
    <section id="carousel-section" class="section-global-wrapper"> 
        <div class="container-fluid-kamn">
            <div class="row">
                <div id="carousel-1" class="carousel slide">

                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-lg">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
        
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <!-- Begin Slide 1 -->
                        @foreach($sliders as $slider)
                        <div class="item  @if($loop->iteration==1)active @else @endif ">
                            <img src="assets/img/slider/{!! $slider->image !!}" height="400" alt="">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        @endforeach
                    </div>
        
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-1" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-1" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End #carousel-section -->


    <!-- Begin #services-section -->
    <section id="services" class="services-section section-global-wrapper">
        <div class="container">
            <div class="row">
                <div class="services-header">
                    
                    @foreach($texts as $text)

                    <p class="services-header-body"><em> {!! $text->text !!} </em>  </p><hr>
                    
                    @endforeach

                </div>
            </div>
      
           
    
        </div>      
    </section>
    <!-- End #services-section -->


   

    
     @endsection