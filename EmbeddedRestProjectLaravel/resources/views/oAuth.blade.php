@extends('layouts.app')
 
@section('content')
 
   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <section class="et-hero-tabs" id="Home">
       
<!--          Logout button -->
        <div id="topRight">
            @if (Auth::check())      
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <img id="logout" title="Log-out" onerror="Logout" alt="Logout" src="/js/jsgrid-1.5.3/images/User-Interface-Logout-icon.png"><br/>Log-out</img>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <a href="/" class="auth">
                    <img title="Database" onerror="Database" alt="Database" src="/js/jsgrid-1.5.3/images/database_icon.png"><br/>Database</img>
                </a>
            @else
                <a href="{{ url('') }}">Back</a>
            @endif
           
        </div>
       
        <h1 data-shadow='oAUTH'>oAUTH</h1>
           
        <div class="et-hero-tabs-container">
            <a class="et-hero-tab" href="#Home">Home</a>
            <a class="et-hero-tab" href="#Klanten">Personal Access Tokens</a>                
            <span class="et-hero-tab-slider"></span>
        </div>    
    </section>
 
    <!-- Main -->
    <main class="et-main">
           
        <section class="et-slide" id="Klanten">
<!--            <passport-clients></passport-clients>
            <passport-authorized-clients></passport-authorized-clients>-->
            <passport-personal-access-tokens></passport-personal-access-tokens>
        </section>
       
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection