@extends('layouts.app')


@section('content')
    @if(auth()->user()->isOwner())
        <div class="div d-flex justify-content-end">
            <a href="{{  route('hostels.create')  }}" class="btn btn-success float-right mb-2">Add Hostel</a>
        </div>
    @endif
    <div class="card card-default">
        <div class="card-header">Hostels</div>
        @if ($hostels->count()>0)
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Price</th>
                        @if(auth()->user()->isOwner())
                            <th></th>
                            <th></th>
                        @endif

                    </thead>
                    <tbody>
                            @foreach ($hostels as $hostel)
                                <tr>
                                    <td>
                                        @if($hostel->img1)
                                            <img src="{{ asset('storage/'.$hostel->img1) }}" width="140px" height="54px" alt="">
                                        @else
                                        <img src="{{ asset('img/noimage.png') }}" width="140px" height="90px" alt="">
                                        @endif
                                    </td>
                                    <td>
                                        {{ $hostel->name }}
                                    </td>
                                    <td>
                                        {{ $hostel->location }}
                                    </td>
                                    <td>
                                        {{ $hostel->price }}
                                    </td>
                                    @if(auth()->user()->isOwner())
                                        <td>
                                            <a href="{{ route('hostels.edit', $hostel->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('hostels.destroy', $hostel->id) }}" method='POST'>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" href="" class="btn btn-danger btn-sm">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    @endif
                                    
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <h3 class="text-center">No Hostels Yet</h3>        
        @endif
    </div>
@endsection

@section('scripts')
    <script>
        function handleDelete(id){
            
            var form = document.getElementById('deleteCategoryForm')
            form.action = '/categories/' + id
            
            $('#deleteModal').modal('show')
        }
    </script>
@endsection