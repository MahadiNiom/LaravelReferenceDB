@extends("app")

@section("content")

<h1>edit</h1>

{!! Form::model($post,['method'=>'PATCH', 'action'=>['App\Http\Controllers\PostsController@update',$post->id]]) !!}
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
        {!! Form::label('content', 'Title') !!}
        {!! Form::text('content', null, ['class'=>'form-control']) !!}
        {!! Form::submit('Edit post', ['class'=> 'btn btn-info']) !!}
{!! Form::close() !!}
    
@stop 