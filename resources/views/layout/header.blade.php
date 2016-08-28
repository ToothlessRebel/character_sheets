<div class="two wide column">
    CharSheets
</div>
@if (!$current_user)
    <div class="right floated right aligned login action four wide column">
        <div><i class="sign in icon "></i> Log In</div>
    </div>
@else
    <div class="right floated right aligned profile action four wide column">
        <div class="ui floating dropdown">
            <img class="gravatar ui middle aligned spaced image" alt="{{ $current_user->name }}'s Avatar" src="{{ $current_user->gravatar('small') }}">
            <div class="text">
                {{ $current_user->username }} <i class="dropdown icon"></i>
            </div>
            <div class="menu">
                @include('user.card', ['user' => $current_user])
            </div>
        </div>
    </div>
@endif
<div class="ui small login modal">
    <div class="header">
        Sign In
    </div>
    <div class="content">
        <form class="ui form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            {{-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> --}}
            <div class="required field">
                <label for="username">Username</label>
                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}">
                {{-- @if ($errors->has('email'))
                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                @endif --}}
            </div>
            <div class="required field">
                <label for="password" class="col-md-4 control-label">Password</label>
                <input id="password" type="password" class="form-control" name="password">
            </div>
            <div class="field">
                <div class="ui checkbox">
                    <input type="checkbox" name="remember" class="hidden">
                    <label>Remember Me</label>
                </div>
            </div>
            <div class="ui error message">
                <div class="header">Could Not Log In</div>
                <ul class="errors"></ul>
            </div>
            <div class="field">
                <button type="submit" class="ui sign in button">
                    Login
                </button>
            </div>
        </form>
        <a class="forgot password" href="{{ url('/password/reset') }}">Forgot Your Password?</a> | <a
                class="register"
                href="{{ url('/register') }}">Register</a>
    </div>
</div>
