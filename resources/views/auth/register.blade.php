@extends('layout.main')

@section('styles')
    <link rel="stylesheet" href="{{ elixir('css/register.css') }}">
@endsection

@section('content')
    <div class="right aligned ten wide column">
        <form class="ui huge equal width form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <div class="inline field{{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="username">Username</label>
                <input id="username" type="text" name="username" value="{{ old('name') }}">
                @if ($errors->has('username'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="inline field{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">E-Mail Address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="inline field{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password">
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="inline field{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="ui right aligned grid">
                <div class="row">
                    <div class="ten wide column"></div>
                    <div class="six wide button column">
                        <button type="submit" class="ui positive fluid register button">
                            <i class="add user icon"></i> Register
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
