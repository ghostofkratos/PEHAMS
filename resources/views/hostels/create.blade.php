@extends('layouts.app')


@section('content')
    <div class="card card-default">
        <div class="card-header">
            {{ isset($hostel) ? 'Edit Hostel' : 'Create Hostel' }}
        </div>
        <div class="card-body">
            @include('partials.errors')

            <form action="{{ isset($hostel) ? route('hostels.update', $hostel->id) : route('hostels.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if(isset($hostel))
                    @method('PUT')
                @endif
                 
               
                <div class="form-group">
                    <label for="name">Name</label>
                <input type="text" id='name' class="form-control" name='name' value="{{ isset($hostel) ? $hostel->name : ''  }}">
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                <input type="text" id='location' class="form-control" name='location' value="{{ isset($hostel) ? $hostel->name : ''  }}">
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    @if(isset($hostel->img1))
                    <div class="div" id="west">
                        
                            <img src="{{ asset('storage/'.$hostel->img1) }}" width="140px" height="54px" alt="" id="image1">
                            <button type="button" href="" id="delbtn1" name="delbtn1" class="btn btn-danger btn-sm" onclick="deleteimg1()">
                                Delete
                            </button>
                            <input type="text" id="delimg1" name="delimg1" hidden>
                        
                        <input type="file"  name='img1' id='img1'>    
                    </div>
                    @endif
                    

                    @if(isset($hostel->img2))
                    <img src="{{ asset('storage/'.$hostel->img2) }}" width="140px" height="54px" alt="" id="image2">
                    <button type="submit" id="delbtn2" name="delbtn2" href="" class="btn btn-danger btn-sm" onclick="deleteimg2()">
                        Delete
                    </button>
                    <input type="text" id="delimg2" name="delimg2" hidden>
                    @endif
                    <input type="file" class="form-control" name='img2' id='img2'>

                    @if(isset($hostel->img3))
                    <img src="{{ asset('storage/'.$hostel->img3) }}" width="140px" height="54px" alt="" id="image3">
                    <button type="submit" id="delbtn3" name="delbtn3" href="" class="btn btn-danger btn-sm" onclick="deleteimg3()">
                        Delete
                    </button>
                    <input type="text" id="delimg3" name="delimg3" hidden>
                    @endif
                    <input type="file" class="form-control" name='img3' id='img3'>
                    
                    @if(isset($hostel->img4))
                    <img src="{{ asset('storage/'.$hostel->img4) }}" width="140px" height="54px" alt="" id="image4">
                    <button type="submit"  id="delbtn4" name="delbtn4" href="" class="btn btn-danger btn-sm" onclick="deleteimg4()">
                        Delete
                    </button>
                    <input type="text" id="delimg4" name="delimg4" hidden>
                    @endif
                    <input type="file" class="form-control" name='img4' id='img4'>
                    
                    @if(isset($hostel->img5))
                    <img src="{{ asset('storage/'.$hostel->img5) }}" width="140px" height="54px" alt="" id="image5">
                    <button type="submit" id="delbtn5" name="delbtn5" href="" class="btn btn-danger btn-sm" onclick="deleteimg5()">
                        Delete
                    </button>
                    <input type="text" id="delimg5" name="delimg5" hidden>
                    @endif
                    <input type="file" class="form-control" name='img5' id='img5'>
                </div>

                <div id="map" class="form-control"></div>
                <div class="form-group">
                    <label for="coordinates">Coordinates</label>
                <input type="text" id="coordinates" name="coordinates" class="form-control" readonly value="{{ isset($hostel) ? $hostel->coordinates : ''  }}">
                    <input type="text" id="latitude" name="latitude" class="form-control" hidden value="{{ isset($hostel) ? $hostel->latitude : ''  }}">
                    <input type="text" id="longitude" name="longitude" class="form-control" hidden value="{{ isset($hostel) ? $hostel->longitude : ''  }}">
                </div>

                <div class="form-group">
                    <label for="gender">Hostel Type</label>
                    <label class="radio-inline" style="margin-right: 15px"><input type="radio" value="male" name="gender" id="gender"
                        {{ isset($hostel) ? $hostel->gender === 'male' ? 'checked' : '' : ''  }}
                        >Male</label>
                    <label class="radio-inline"><input type="radio" value="female" name="gender" id="gender" 
                        {{ isset($hostel) ? $hostel->gender === 'female' ? 'checked' : '' : ''  }}
                        >Female</label>
                    <label class="radio-inline" ><input  type="radio" value="unisex" name="gender" id="gender"
                        {{ isset($hostel) ? $hostel->gender === 'unisex' ? 'checked' : '' : ''  }}
                        >Unisex</label>

                </div>

                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" name="contact" id="contact" class="form-control" value="{{ isset($hostel) ? $hostel->contact : ''  }}">
                </div>
                <div class="form-group">
                    <label for="price">Price per Bed</label>
                    <input type="number" name="price" id="price" class="form-control" value="{{ isset($hostel) ? $hostel->price : ''  }}">
                </div>

                <div class="form-group">
                <button class="btn button-success" type="submit">
                    {{ isset($hostel) ? "Update Hostel" : "Add Hostel" }}
                </button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        function deleteimg1(){
            document.getElementById('image1').hidden = true;
            document.getElementById('delbtn1').hidden = true;
            document.getElementById('delimg1').value = 'true';
        }
        function deleteimg2(){
            document.getElementById('image2').hidden = true;
            document.getElementById('delbtn2').hidden = true;
            document.getElementById('delimg2').value = 'true';
        }
        function deleteimg3(){
            document.getElementById('image3').hidden = true;
            document.getElementById('delbtn3').hidden = true;
            document.getElementById('delimg3').value = 'true';
        }
        function deleteimg4(){
            document.getElementById('image4').hidden = true;
            document.getElementById('delbtn4').hidden = true;
            document.getElementById('delimg4').value = 'true';
        }
        function deleteimg5(){
            document.getElementById('image5').hidden = true;
            document.getElementById('delbtn5').hidden = true;
            document.getElementById('delimg5').value = 'true';
        }
    </script>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdexLUiSg2Adroxes9A4341KsyBwyx67Y&callback=initMap&libraries=&v=weekly"
    defer
    ></script>

    <script>
        function initMap() {
            const myLatlng = { lat: {{ isset($hostel) ? $hostel->latitude : -15.8015635  }}, lng: {{ isset($hostel) ? $hostel->longitude : 35.0247534  }} };//-15.8015635,35.0247534
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: myLatlng,
            });
            // Create the initial InfoWindow.
            let infoWindow = new google.maps.InfoWindow({
                content: "Click the map to get Lat/Lng!",
                position: myLatlng,
            });
            let mark = new google.maps.Marker({
                position: myLatlng,
                map,
                title: "Hello World!",
            });
            mark.setVisible(false);

            infoWindow.open(map);
            // Configure the click listener.
            map.addListener("click", (mapsMouseEvent) => {
                // Close the current InfoWindow.
                infoWindow.close();
                // Create a new InfoWindow.
                
                infoWindow.setContent(
                JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
                );
                mark.setPosition(mapsMouseEvent.latLng);
            // double lng = mapsMouseEvent.latLng.lng.toJSON(), null, 2);
                document.getElementById('latitude').value = mapsMouseEvent.latLng.lat();
                document.getElementById('longitude').value = mapsMouseEvent.latLng.lng();
                document.getElementById('coordinates').value = JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2);
                //infoWindow.open(map);
                mark.setVisible(true);
            });
        }
    </script>
@endsection

@section('css')
    <style type="text/css">
        /* Always set the map height explicitly to define the size of the div
        * element that contains the map. */
        #map {
        height: 400px;
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