@extends('layouts.app')

@section('content')
<div class="div d-flex justify-content-end">
    <a href="{{  route('posts.create')  }}" class="btn btn-success float-right mb-2">Add Post</a>
</div>

<div class="card card-default">
    <div class="card-header">Posts</div>

    <div class="card-body">
        @if ($posts->count() > 0)
            <table class="table">
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                            {{-- remember to set the image path to be visible and clickable to the link
                                using asset command --}}
                            
                            <img src="{{ asset('storage/'.$post->image) }}" width="140px" height="54px" alt="">
                            </td>
                            <td>
                                {{$post->title}}
                            </td>
                            <td>@isset($post->category)
                                
                            
                            <a href="{{ route('categories.edit', $post->category->id) }}">
                                    {{ $post->category->name }}
                                </a>
                            @endisset
                            </td>
                            <td>
                                @if (!$post->trashed())
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm">Edit</a>
                                @else
                                    <form action="{{ route('restore-posts', $post->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-info btn-sm">Restore</button>
                                    </form>

                                @endif
                            </td>
                            <td>
                            <form action="{{ route('posts.destroy', $post->id) }}" method='POST'>
                                @csrf
                                @method('DELETE')
                                <button type="submit" href="" class="btn btn-danger btn-sm">
                                    {{ $post->trashed() ? 'Delete' : 'Trash' }}
                                </button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h3 class="text-center">No Posts Yet</h3>
        @endif
    </div>
</div>

@endsection