@extends('layouts.app')

@section('header-navbar')
<header-navbar-component>
    @guest
    <ul slot="left" class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    </ul>
    @else
    <ul slot="right" class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
    @endguest
    
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