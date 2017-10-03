<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  </head>
  <body>
    <div class="container">
  
     @if(session('sent'))
      <div class="alert alert-success col-md-3 col-lg-3 col-sm-12 col-xs-12" id="massageSent">
        <strong>{{ session('sent') }}</strong>
     </div>
     <script type="text/javascript">
        setTimeout(function(){$('#massageSent').fadeOut('fast')},3000);
     </script>
     @endif

 
  @section('menu')
    @include('site.menu') 
  @show

  <head>
    @section('about')
      @include('site.about')
    @show
  </head>

  <section id="edu">
    @section('edu')
     @include('site.edu') 
    @show   
  </section>

  <section id="skill">
    @section('skill')
      @include('site.skill')
    @show
  </section>

  <section id="portfolio">
    @section('portfolio')
      @include('site.portfolio')
    @show
  </section>

  <section id="contact">
    @section('contact')
      @include('site.contact')
    @show
  </section>

 </div>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src=" {{ asset('js/move.js') }} "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  
  </body>
</html>