@extends("app")


@section("content")

    <ul>
        @foreach($posts as $post)
        <img height='100px' src="{{$post->path}}" alt="">

        <a href="{{route('posts.show', $post->id)}}"><li>{{$post->title}}</li>
        </a>
        @endforeach
    </ul>
    <a class="btn btn-primary" href="{{route('posts.create')}}">Create post</a>
@stop