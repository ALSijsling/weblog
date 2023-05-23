<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Weblog</title>
        
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/nav.css')}}">
        <!-- icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>

    <body>
        <div id="navBar">
            <a href="{{route('posts.index')}}">Home</a>
            <a href="{{route('posts.create')}}">New Blog</a>
            <div id="dropdown">
                <button id="dropbtn">Categories<i class="fa fa-caret-down"></i></button>
                <div id="dropdown-content">
                    <a href="#">Cat 1</a>
                    <a href="#">Cat 2</a>
                    <a href="#">Cat 3</a>
                </div>
            </div>
            <form id="searchBar">
                <input type="text" placeholder="Search..">
                <button type="submit"><i class="fa fa-fw fa-search"></i></button>
            </form>
            <div id="users">
                @auth
                    <a href="#">{{auth()->user()->name}} <i class='fa fa-user'></i></a>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit">Log Out</button>
                @else
                    <a href="/register">Register</a>
                    <a href="/login">Log In</a>
                @endauth
            </div>
        </div>

        <main>
            {{$slot}}
        </main>

        <x-flash/>
    </body>

</html>