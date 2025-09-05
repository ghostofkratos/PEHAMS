@extends('layouts.app')

@section('title')
    Hostels
@endsection




@section('content')

<div class="container">

  <div class="row">
    <div class="col-md-8 mx-auto">

    <h1 class="display-4">Hostels</h1>
      <p class="lead-2 opacity-90 mt-6">Hostels are listed below with the following format: <br>
      Hostel name <br>
      Hostel Location <br>
      Price per Bed <br>
      Contact <br></p>
      <hr>
    </div>
  </div>


<div class="row gap-y">
<form class="input-group dorothy" action="{{ route('hostels.index') }}" method="GET">
    <input type="text" class="form-control" name="search" placeholder="Enter Hostel location">
    <div class="input-group-addon">
      <span class="input-group-text"><i class="ti-search"></i></span>
    </div>
  </form>
  @foreach ($hostels as $hostel)
  <div class="col-md-6 col-xl-4">
      <div class="product-3 mb-3">
        <a class="product-media" href="{{ route('hostels.show', $hostel->id) }}">
          @if($hostel->img1)
              <img src="{{ asset('storage/'.$hostel->img1) }}" alt="">
            
          @elseif($hostel->img2)
              <img src="{{ asset('storage/'.$hostel->img2) }}" alt="">
              
            
          @elseif($hostel->img3)
              <img src="{{ asset('storage/'.$hostel->img3) }}" alt="">
            
          @elseif($hostel->img4)
              <img src="{{ asset('storage/'.$hostel->img4) }}" alt="">
              
            
          @elseif($hostel->img5)
              <img src="{{ asset('storage/'.$hostel->img5) }}" alt="">
              
            
          @else
              <img src="{{ asset('img/noimage.png') }}" width="140px" height="90px" alt="">
              
          @endif
        </a>

        <div class="product-detail">
        <h6><a href="{{ route('hostels.show', $hostel->id) }}">{{ $hostel->name }}</a></h6>
          <div class="">{{ $hostel->location }}</div>
          <div class="product-price">MWK{{ $hostel->price }}</div>
        <div class="">{{ $hostel->contact }}</div>
        </div>
      </div>
    </div>
  @endforeach


  
</div>

<!-- Delete hOSTEL Modal -->
<div class="modal fade" id="deleteHostelModal" tabindex="-1" role="dialog" aria-labelledby="deleteHostelModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="" id="deleteHostelForm" method="POST">
      @csrf
      @method('DELETE')
      

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteHostelModalLabel">Delete Hostel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go Back</button>
          <button type="submit" class="btn btn-primary">Yes, Delete</button>
        </div>
      </div>

    </form>
  </div>
</div>



{{ $hostels->links() }}
@endsection

@section('css')

<style type="text/css">


/* Make the image responsive */
.container img {
  width: 100%;
  height: auto;
}

.dorothy {
  border-style: solid;
  border-width: 5px;
  border-color: #949392;
}

/* Style the a and place it in the middle of the container/image */
.container .btn-info {
  position: absolute;
  top: 0%;
  left: 55%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: rgb(37, 165, 26);
  color: white;
  font-size: 16px;
  padding: 1px 3px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.container .btn-danger {
  position: absolute;
  top: 0%;
  left: 85%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  border-radius: 5px;
}

.btn-primary {
  background-color: #FF4954;
}

.container .btn:hover {
  background-color: rgb(59, 136, 167);
} 

</style>

@endsection

@section('scripts')
    <script>
        function handleDelete(id){
            
            var form = document.getElementById('deleteHostelForm')
            form.action = '/hostels/' + id
            console.log('deleting', form)
            $('#deleteHostelModal').modal('show')
        }
    </script>
@endsection