@extends('layout.main')

@section('content')
    <div class="ui grid container">
        <div class="row">
            <div class="three wide column">
                <img class="ui spaced image" src="{{ $user->gravatar('huge') }}">
            </div>
            <div class="ten wide column">
                <div class="grid">
                    <div class="row">
                        <div class="column">
                            <h1 class="ui header">{{ $user->username }}</h1>
                        </div>
                    </div>
                    @if ($user->name)
                        <div class="row">
                            <div class="column">
                                <h3 class="ui header">{{ $user->name }}</h3
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="column">
                            <h3 class="ui header">Reputation {{ $user->reputation }}</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            {{-- Awards icons will go here. --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($user->id === $current_user->id)
        <div class="row">
            <div class="column">
                <h1 class="ui dividing header">API Settings</h1>
            </div>
        </div>
            <div class="row">
                <div class="two wide column">
                    API Token:
                </div>
                <div class="fourteen wide column">
                    {{ $user->api_token }}<img data-clipboard-text="{{ $user->api_token }}" class="ui middle aligned spaced clippy image" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjE0cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDE0IDE2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCAzLjguMyAoMjk4MDIpIC0gaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoIC0tPgogICAgPHRpdGxlPmNsaXBweTwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4KICAgIDxkZWZzPjwvZGVmcz4KICAgIDxnIGlkPSJPY3RpY29ucyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9ImNsaXBweSIgZmlsbD0iIzAwMDAwMCI+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik0yLDEzIEw2LDEzIEw2LDE0IEwyLDE0IEwyLDEzIEwyLDEzIFogTTcsNyBMMiw3IEwyLDggTDcsOCBMNyw3IEw3LDcgWiBNOSwxMCBMOSw4IEw2LDExIEw5LDE0IEw5LDEyIEwxNCwxMiBMMTQsMTAgTDksMTAgTDksMTAgWiBNNC41LDkgTDIsOSBMMiwxMCBMNC41LDEwIEw0LjUsOSBMNC41LDkgWiBNMiwxMiBMNC41LDEyIEw0LjUsMTEgTDIsMTEgTDIsMTIgTDIsMTIgWiBNMTEsMTMgTDEyLDEzIEwxMiwxNSBDMTEuOTgsMTUuMjggMTEuODksMTUuNTIgMTEuNywxNS43IEMxMS41MSwxNS44OCAxMS4yOCwxNS45OCAxMSwxNiBMMSwxNiBDMC40NSwxNiAwLDE1LjU1IDAsMTUgTDAsNCBDMCwzLjQ1IDAuNDUsMyAxLDMgTDQsMyBDNCwxLjg5IDQuODksMSA2LDEgQzcuMTEsMSA4LDEuODkgOCwzIEwxMSwzIEMxMS41NSwzIDEyLDMuNDUgMTIsNCBMMTIsOSBMMTEsOSBMMTEsNiBMMSw2IEwxLDE1IEwxMSwxNSBMMTEsMTMgTDExLDEzIFogTTIsNSBMMTAsNSBDMTAsNC40NSA5LjU1LDQgOSw0IEw4LDQgQzcuNDUsNCA3LDMuNTUgNywzIEM3LDIuNDUgNi41NSwyIDYsMiBDNS40NSwyIDUsMi40NSA1LDMgQzUsMy41NSA0LjU1LDQgNCw0IEwzLDQgQzIuNDUsNCAyLDQuNDUgMiw1IEwyLDUgWiIgaWQ9IlNoYXBlIj48
L3BhdGg+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=">
                </div>
            </div>
        @endif
    </div>
@endsection
