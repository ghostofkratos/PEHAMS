@extends('layouts.app')

@section('title')
    Owner Requests
@endsection

@section('content')


<div class="card card-default">
    <div class="card-header">Users</div>

    <div class="card-body">
        @if ($users->count() > 0)
            <table class="table">
                <thead>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        @if ( (!$user->isVerified()) && $user->isOwner())
                        <tr>
                            <td>
                                <img width='40px' height="40px" style="border-radius: 50%" src="{{ Gravatar::src($user->email) }}" alt="">
                            
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            
                            <td>
                                
                            <form action="{{ route('users.verify-owner', $user->id) }}" method="POST">
                                @csrf

                                <button type="submit" class="button btn-sm btn-success">Verify Hostel Owner</button>
                            </form>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        @else
            <h3 class="text-center">No Users Yet</h3>
        @endif
    </div>
</div>

@endsection