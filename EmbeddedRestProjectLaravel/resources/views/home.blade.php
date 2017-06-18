@extends('layouts.app')

@section('content')

   

    <section class="et-hero-tabs" id="Home"> 
        
<!--          Logout button -->
        <div id="topRight">
            @if (Auth::check())       
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <img title="Log-out" onerror="Logout" alt="Logout" src="/js/jsgrid-1.5.3/images/User-Interface-Logout-icon.png"><br/>Log-out</img>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <a href="/auth" class="auth">
                    <img title="oAuthentication" onerror="oAuth" alt="oAuth" src="/js/jsgrid-1.5.3/images/ic_lock.png"><br/>oAuth</img>
                </a>
            @else
                <a href="{{ url('') }}">Back</a>
            @endif
        </div>
        
        <h1 data-shadow='DATABASE'>DATABASE</h1>
            
        <div class="et-hero-tabs-container">
            <a class="et-hero-tab" href="#Home">Home</a>
            <a class="et-hero-tab" href="#Klanten">Klanten</a>                
            <a class="et-hero-tab" href="#Installaties">Installaties</a>
            <a class="et-hero-tab" href="#Containers">Containers</a>
            <a class="et-hero-tab" href="#Modules">Modules</a>
            <a class="et-hero-tab" href="#Logs">Logs</a>
            <a class="et-hero-tab" href="#Verantwoordelijken">Verantwoordelijken</a>
            <span class="et-hero-tab-slider"></span>
        </div>    
    </section>

    <!-- Main -->
    <main class="et-main">
            
        <section class="et-slide" id="Klanten">
            @include('include/klantenTable')
        </section>
            
        <section class="et-slide" id="Installaties">                
            @include('include/installatiesTable')
        </section>
            
        <section class="et-slide" id="Containers">
            @include('include/containersTable')
        </section>
            
        <section class="et-slide" id="Modules">
            @include('include/modulesTable')
        </section>
            
        <section class="et-slide" id="Logs">
            @include('include/logsTable')
        </section>
            
        <section class="et-slide" id="Verantwoordelijken">
            @include('include/verantwoordelijkenTable')  
        </section>
        
    </main>
@endsection
