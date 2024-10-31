@extends("app")


@section("content")


{!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\PostsController@store', 'files'=>true]) !!}
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
        {!! Form::label('content', 'Content') !!}
        {!! Form::text('content', null, ['class'=>'form-control']) !!}
        {!! Form::file('file') !!}
        <br>
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}


@if(count($errors)>0)

<div>
        @foreach($errors->all() as $error)
                <ul>
                        <li>{{$error}}</li>
                </ul>

        @endforeach
</div>


@endif

    
@stop