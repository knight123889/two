<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("titlename")</title>

    <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>
<body>
    <div class="home">
        <div class="sidebar">

            <a href="{{route('home')}}">HOME</a>
            <a href="{{route('aboutme')}}">ABOUT ME</a>
            <a href="{{route('contactme')}}">CONTACT ME</a>
            <a href="{{route('showproject')}}">PROJECTS</a>
        </div>
        <div class="content">
            @yield("contantarea")
        </div>
    </div>

    <script src="{{ asset('script.js') }}"></script>

</body>
</html>