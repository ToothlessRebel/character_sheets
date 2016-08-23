<div class="right aligned column">
    @if (!$user)
        <i class="sign in icon "></i> Log In
    @endif
</div>
<div class="ui small login modal">
    <div class="header">
        Sign In
    </div>
    <div class="content">
        <form class="ui form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            {{-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> --}}
            <div class="field">
                <label for="email">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                {{-- @if ($errors->has('email'))
                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                @endif --}}
            </div>
            <div class="field">
                <label for="password" class="col-md-4 control-label">Password</label>
                <input id="password" type="password" class="form-control" name="password">
            </div>
            <div class="field">
                <div class="ui checkbox">
                    <input type="checkbox" name="remember" class="hidden">
                    <label>Remember Me</label>
                </div>
            </div>
            <div class="field">
                <button type="submit" class="ui button">
                    Login
                </button>
            </div>
        </form>
        <a class="" href="{{ url('/password/reset') }}">Forgot Your Password?</a> | <a href="">Register</a>
    </div>
</div>
