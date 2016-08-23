<!DOCTYPE html>
<html>
<head>
    <title>Character Sheets</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.js"></script>
</head>
<body>
<div class="ui grid container">
    <div class="row">
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

@show
</html>
