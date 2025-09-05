<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Dashboard Template · Bootstrap v5.0</title>

    

    

    <!-- Bootstrap core CSS -->
  <link href="{{asset('b2/assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('sel/select2.min.css')}}" rel="stylesheet">
  <link href="{{asset('trix/trix.css')}}" rel="stylesheet">
 

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
  <link href="{{asset('b2/dashboard.css')}}" rel="stylesheet">
  </head>
  <body >


    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-center" href="#">PEHAMS</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link"  onclick="event.preventDefault();
      document.getElementById('logout-form').submit();" href="{{ route('logout') }}">Sign out <i class="fa fa-sign-out" aria-hidden="true"></i></a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </li>
  </ul>
</header>



<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Profile</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="container-fluid">

      <div class="text-center">
        <img src="{{url('img/default.png')}}" alt="{{Auth::user()->name}}" alt="" style="height:60px;width:60px" class="rounded-circle">
      </div>
      <form action="{{ route('users.update-profile') }}" method="POST">
        @csrf
        @method('PUT')

        

        <div class="form-group">
            <label for="name">Name</label>
        <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="name" value="{{ Auth::user()->name }}">
        @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>    
                @enderror
        </div>

        <div class="form-group">
            <label for="about">About Me</label>
            <textarea name="about" id="about" cols="5" rows="5" class="form-control  @error('about') is-invalid @enderror">{{ Auth::user()->about}}</textarea>
            @error('about')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>    
                @enderror
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success form-control ">Update Profile</button>
        </div>
        
    </form>
    </div>  
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    @include('aside.nav')

    

    

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" @yield('css') >
      <div class="toast d-flex align-items-center bg-success "  role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
        <strong class="text-white">{{Session::get('notify')}}</strong>
        </div>
        <button type="button" class="btn-close ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="content" >
        @yield('content')
      </div>
     
    </main>
  </div>
</div>


<script src="{{asset('b2/assets/dist/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('b2/assets/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('b2/assets/dist/js/popper.js')}}"></script>
<script src="{{asset('sel/select2.min.js')}}"></script>


     

<script src="{{asset('trix/trix.js')}}"></script>
<script src="{{asset('trix/trix-core.js')}}"></script>


<script src="{{asset('b2/dashboard.js')}}"></scr>

<script>
  $('.tags-selector').select2({width:'100%'});

  @if(Session::has('notify'))
  var toastElList = [].slice.call(document.querySelectorAll('.toast'))
  var toastList = toastElList.map(function (toastEl) {

    options = {
    delay:6000,
    animation:true,
    autohide:false
  }
    return new bootstrap.Toast(toastEl, options)
  })
  
  toastList[0].show();
  @endif
</script>



<script>
   var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {

      options = {
        html:true,
        delay: { "show": 1000, "hide": 500 },
        placement: 'auto'
      }

      return new bootstrap.Popover(popoverTriggerEl, options);

      
  });
</script>

<script>  
$(document).ready(function(){

  const songs = document.querySelectorAll('.song');
  const playbuttons = document.querySelectorAll('.play-btn');
  
  $('.play-btn').on('click',function() {
   var id = $(this).attr('music-data');
  $('.play-btn').not(this).each(function(index,btn){
    $(this).html('<i class="fa fa-play" aria-hidden="true"></i>')
  });
   var song = document.getElementById(id);
   song.play();
   $(this).html('<i class="fa fa-pause" aria-hidden="true"></i>');
   $('audio').on("play",function(){
    
     $("audio").not(this).each(function(index,audio){
       console.log(audio.attr('id')); 
       audio.pause();
     });
   });
  });
  
});

</script>
      
  </body>
</html>
