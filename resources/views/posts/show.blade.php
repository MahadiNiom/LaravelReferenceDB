@extends("app")


@section("content")

    <h1>{{$post->title}}</h1>

    <a href="{{route('posts.edit', $post->id)}}">edit</a>
    
{!! Form::open(['method'=>'DELETE', 'action'=>['App\Http\Controllers\PostsController@update',$post->id]]) !!}
        {!! Form::submit('Delete post', ['class'=> 'btn btn-danger']) !!}
{!! Form::close() !!}
    
    
    
@stop