<!DOCTYPE html>
<html>
<head>
    <title>Character Sheets</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.css">
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.js"></script>
    @section('styles')
    @show
</head>
<body>
<div class="ui grid container">
    <div class="app header row">
        @section('header')
            @include('layout.header')
        @show
    </div>
    <div class="row">
        @yield('content')
    </div>
</div>
</body>
@section('scripts')
    <script type="text/javascript" src="{{elixir('js/all.js')}}"></script>
@show
</html>
