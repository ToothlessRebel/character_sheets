@extends('layout.main')

@section('content')
    <div class="grid">
        <div class="row">
            Designed to provide custom, rule-enforced character sheets.
            <span class="show login" data-show="{{ $show_login }}"></span>
        </div>
        <div class="row">
            Also provides and API for accessing information about rule sets. The API tests are currently:
            <img src="https://travis-ci.org/ToothlessRebel/character_sheets.svg?branch=master" alt="Build Status Badge">
        </div>
    </div>
@endsection
