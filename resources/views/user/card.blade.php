<!--suppress HtmlUnknownTarget -->
<div class="ui card">
    <div class="content">
        <img class="right floated ui image" src="{{ $user->gravatar('small') }}">
        <div class="header">
            {{ $user->username }}
        </div>
        <div class="meta">
            {{ $user->reputation }}
        </div>
        <div class="description">
        </div>
    </div>
    <div class="extra content">
        <a class="item" href="/user/{{ strtolower($user->username) }}"><i class="user icon"></i> Profile</a>
        @if ($user->id === $current_user->id)
            <span class="right floated">
                <a class="item" href="/logout"><i class="sign out icon"></i> Logout</a>
            </span>
        @endif
    </div>
</div>
