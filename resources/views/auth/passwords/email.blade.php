@extends('layout.main')

@section('styles')
    <link rel="stylesheet" href="{{ elixir('css/password.css') }}">
@endsection

@section('content')
    <div class="right aligned ten wide column">
        {{--
        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        --}}
        <form class="ui huge equal width form" method="POST" action="{{ url('/password/email') }}">
            {{ csrf_field() }}
            <div class="inline field">
                <label>E-Mail Address</label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="ui right aligned grid">
                <div class="row">
                    <div class="ten wide column"></div>
                    <div class="six wide button column">
                        <button type="submit" class="ui positive fluid button">
                            <i class="send icon"></i> Send Password Reset Link
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
