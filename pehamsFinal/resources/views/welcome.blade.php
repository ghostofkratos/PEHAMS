@extends('layouts.app')
@section('title')
    Home
@endsection
@section('header')
    <!-- Header -->
<header class="header">
  <div class="container">
    <div class="row align-items-center h-100">

      <div class="col-md-7 mx-auto">
        <h1>About us</h1>
        <p class="lead-3">Polytechnic External Hostel Advertisment and Management Systems(PEHAMS) is a website that was started in 2020. The main goal of the website is to help students find hostels way easier than it was before. Students can see the locations of the hostels on a map to easily navigate to them and can also get contact information for hostel owners to help them get there easily. We hope you enjoy using our website.</p>
      </div>

    </div>
  </div>
</header><!-- /.header -->
@endsection


@section('content')

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Slider
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section p-0">
    <div data-provide="slider" data-autoplay="true" data-slides-to-show="2" data-css-ease="linear" data-speed="12000" data-autoplay-speed="0" data-pause-on-hover="false">
      <div class="p-2">
        <div class="rounded bg-img h-400" style="background-image: url({{ asset('img/img1.jpg') }})"></div>
      </div>

      <div class="p-2">
        <div class="rounded bg-img h-400" style="background-image: url({{ asset('img/img2.jpg') }})"></div>
      </div>

      <div class="p-2">
        <div class="rounded bg-img h-400" style="background-image: url({{ asset('img/img3.jpg') }})"></div>
      </div>

      <div class="p-2">
        <div class="rounded bg-img h-400" style="background-image: url({{ asset('img/img4.jpg') }})"></div>
      </div>
    </div>
  </section>


  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Our Mission
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section id="section-mission" class="section">
    <div class="container">
      <div class="row gap-y align-items-center">

        <div class="col-md-7 mx-auto">
          <h2>Our Mission</h2>
          <p class="lead">We’re a team of creative and knowledgable designers and developers. We have researched your needs and we know what do you need and more that, we know what do your students want from the website.</p>

          <br>

          <p>
            <i class="ti-check text-success mr-2"></i>
            <span> Provide an easy to use website</span>
          </p>

          <p>
            <i class="ti-check text-success mr-2"></i>
            <span> Help hostel owners find more customers</span>
          </p>

          <p>
            <i class="ti-check text-success mr-2"></i>
            <span> Streamline getting the location of hostels</span>
          </p>

          <p>
            <i class="ti-check text-success mr-2"></i>
            <span> Help students find hostels quickly</span>
          </p>
        </div>

      </div>
    </div>
  </section>




  


  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Customers
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section bg-gray py-6">
    <div class="container">

      <div class="partner partner-sm">
        <img src="../assets/img/partner/1.png" alt="partner 1">
        <img src="../assets/img/partner/2.png" alt="partner 2">
        <img src="../assets/img/partner/3.png" alt="partner 3">
        <img src="../assets/img/partner/4.png" alt="partner 4">
        <img src="../assets/img/partner/5.png" alt="partner 5">
        <img src="../assets/img/partner/6.png" alt="partner 6">
      </div>

    </div>
  </section>


  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Team
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section">
    <div class="container">
      <header class="section-header">
        <small>People</small>
        <h2>Meet The Team</h2>
        <hr>
        <p class="lead">Meet our small team that make those great products</p>
      </header>


      <div class="row gap-y">
        <div class="col-md-6 col-lg-3 team-1">
          <a href="#">
            <img src="{{ asset('img/mpha.jpg') }}" alt="...">
          </a>
          <h6>Mphatso  Kasonya</h6>
          <small>Creator</small>
          <div class="social social-gray">
            <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
            <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
            <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
          </div>
        </div>


        

    </div>
  </section>

@endsection
