@extends('layouts.app')

@section('header-navbar')
<header-navbar-component>
    @if (Route::has('login'))
        
        @auth
        <ul slot="left" class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/home') }}">Home</a>
            </li>
        </ul>
            
        @else
        <ul class="navbar-nav ml-auto" slot="right">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Entrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Registrar</a>
            </li>
        </ul>
        @endauth
    @endif

</header-navbar-component>
@endsection

@section('header-carousel')
<header-carousel-component></header-carousel-component>
@endsection

@section('content')
<content-component></content-component>
@endsection

@section('sidebar')
<sidebar-component></sidebar-component>
@endsection

@section('footer')
<footer-component></footer-component>
@endsection