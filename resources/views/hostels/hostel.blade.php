@extends('layouts.app')
@section('title')
    Hostel - {{ $hostel->name }}
@endsection

@section('content')
<div>

    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel beige slide carousel-fade z-depth-1-half" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
        <div class="view">
        <img class="d-block w-100 beige" src="{{ asset('img/img1.jpg') }}" alt="First slide">
        <div class="mask rgba-black-light"></div>
        </div>
    </div>
    <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
        <img class="d-block w-100 beige" src="{{ asset('img/img2.jpg') }}" alt="Second slide">
        <div class="mask rgba-black-light"></div>
        </div>
        
    </div>
    <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
        <img class="d-block w-100 beige" src="{{ asset('img/img3.jpg') }}" alt="Third slide">
        <div class="mask rgba-black-light"></div>
        </div>
    </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<div class="details">
<table class="table">
    <thead>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <tr>
                <td>Price</td>
                <td>MWK{{$hostel->price}}</td>
        </tr>
        <tr>
                <td>Hostel Name:</td>
                <td>{{$hostel->name}}</td>
        </tr>
        <tr>
                <td>Location</td>
                <td>{{$hostel->location}}</td>
        </tr>
        <tr>
                <td>Contact:</td>
        <td>{{ $hostel->contact }}</td>
        </tr>
    </tbody>
</table>
</div>

<div class="comments">
@comments(['model' => $hostel])
</div>
@endsection


@section('scripts')
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    } 
</script>
@endsection

@section('css')
<style type="text/css">
    .beige{
        height: 400px;
        margin-bottom: 10px;
    }
    .details{
        margin-bottom: 50px;
    }
    .comments{
        background-color: whitesmoke;
    }
</style>
@endsection

