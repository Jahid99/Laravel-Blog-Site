<!doctype html>
<html lang="en">
    <head>

        <!-- meta data & title -->
        <meta charset="utf-8">
        <title>Office</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::to('assets/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/animate.min.css') }}">
        <link rel="stylesheet" type="text/css" media="all" href="{{ URL::to('assets/css/style-projects.css') }}">
        

    </head>
  <body>

    <!-- Header -->
        
    <nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
        <div class="container">
        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

               <!-- <a class="navbar-brand wow fadeInDownBig" href="index.html"><img src="assets/img/slider/Office.png" width="100" alt="Office"></a>      -->
            </div>
        
            <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/blog') }}">Blog</a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}"><span>Contact</span></a>
                    </li>
                </ul>         
            </div>
        </div>
    </nav>

<div class="col-lg-5 col-lg-offset-2">
                    <div class="feedback-form">
   @if (count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <strong>Errors:</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

</div>
</div>

@yield('content')

    <div class="copyright text center">
        <p>&copy; Copyright 2018, <a href="#">Your Website Link</a>. Theme by <a href="https://www.fb.com/jahidul.haque.pathan" target="_blank">Jahid</a></p>
    </div>
    
    <script type="text/javascript" src="{{ URL::to('js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ URL::to('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('js/wow.min.js') }}"></script>
    <script>
      new WOW().init();
    </script>
  </body>
</html>
