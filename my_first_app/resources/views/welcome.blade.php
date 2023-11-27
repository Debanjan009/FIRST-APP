@extends('layout')
@section('title','Home Page')
@section('content')
    <div class ="container">
        <p  class="lead">
            Hi 
                @auth
                @if(auth()->user()->name)
                <mark>                 
                  {{auth()->user()->name}}     
                </mark>
                @endif
                @endauth
            , welcome to my First Laravel Website.
        </p>
    </div>
@endsection
