@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Wishlist </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Product</a>
                </div>
            </div>
        </div>

        <br>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Picture</th>
                <th>Price</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td><img src="{{ URL::to('/') }}/images/{{ $post->picture }}" class="img-thumbnail" width="300" /></td>
                    <td><a href=" {{ $post->link }}">{{ $post->price }}</a> </td>
{{--                    @auth()--}}
{{--                        <td>--}}
{{--                            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">--}}
{{--                                <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>--}}
{{--                                <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
{{--                                <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                    @endauth--}}
                </tr>
            @endforeach
        </table>
    </div>

@endsection
