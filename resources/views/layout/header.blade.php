<!--suppress ALL -->
<div class="two wide column">
    CharSheets
</div>
@if (!$user)
    <div class="right floated right aligned login action two wide column">
        <div><i class="sign in icon "></i> Log In</div>
    </div>
@else
    <div class="right floated right aligned profile action two wide column">
        <div class="ui dropdown">
            <div class="text">
                {{ $user->name }} <i class="dropdown icon"></i>
            </div>
            <div class="ui vertical menu">
                <a class="log out item" href="/logout">
                    <i class="sign out icon"></i> Log Out
                </a>
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
                <label for="email">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
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
