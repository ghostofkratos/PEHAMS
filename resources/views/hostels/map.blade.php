@extends('layouts.app')

@section('title')
    Map {{Auth::user()->isverified()}} 
@endsection

@section('content')
    <div id="map"></div>
@endsection

@section('scripts')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdexLUiSg2Adroxes9A4341KsyBwyx67Y&callback=initMap&libraries=&v=weekly"
    defer
    ></script>

    <script>
         function initMap() {
          const myLatlng = { lat: -15.8015635, lng: 35.0247534 };//-15.8015635,35.0247534
          const map = new google.maps.Map(document.getElementById("map"), {
              zoom: 15,
              center: myLatlng,
          });
          var contentString = "mphatso";
          var infoWindow = new google.maps.InfoWindow({
                content: contentString,
          });
          
          {{$index = 0}}
          @foreach ($hostels as $hostel)
            marker{{$index}} = new google.maps.Marker({
              position: { lat: {{$hostel->latitude}}, lng: {{$hostel->longitude}} },
              map,
              title: "{{ $hostel->name }}",
            });
            
            
            marker{{$index}}.addListener('click', ()=>{
              let contentString{{$index}} = 
                "<div id='title'><h3>Hostel<h3></div>"+
                "<a href=\"{{ route('hostels.show', $hostel->id) }}\"><div id='name'>name: {{$hostel->name}}</div></a>"+
                "<div id='location'>location: {{ $hostel->location }}</div>"+
                "<div id='price'>price: {{ $hostel->price }}</div>"+
                "<div id='contact'>contact: {{ $hostel->contact }}</div>";
              infoWindow.setContent(contentString{{$index}});
              infoWindow.open(map,marker{{$index}});
            });
            {{$index= $index + 1}}
          @endforeach
         }
      </script>
  

@endsection

@section('css')
    <style type="text/css">
        /* Always set the map height explicitly to define the size of the div
        * element that contains the map. */
        #map {
        height: 500px;
        }

        /* Optional: Makes the sample page fill the window. */
        html,
        body {
        height: 100%;
        margin: 0;
        padding: 0;
        }
    </style>
@endsection