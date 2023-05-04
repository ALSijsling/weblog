<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @extends('layouts.app')
    </head>

    <body>
        @section('navbar')
            @parent
        @endsection

        @section('content')
            <article id='post'>
                <h1>{{ $post->title }}</h1>
                <h5>{{ $post->created_at->toDateString() }}</h5>
                <div id='article'>{!! $post->article !!}</div>
            </article>
        @endsection    
    </body>

</html>