@extends('layouts/layout')

@section('content')
<div class="menu-item">
    <a href="{{ route('producto', 1)}}">Donají Joven</a>
    <a href="{{ route('producto', 2)}}">Donají Añejo</a>
</div>
    <!--div class="submenu" id="submenu" style="display:none">
        <ul>
                <li><a href="{{ route('producto', 1)}}">Donají Joven</a></li>
                <li><a href="{{ route('producto', 2)}}">Donají Añejo</a></li>
                <li><a href="{{ route('producto', 3)}}">Los cuerudos Blanco</a></li>
                <li><a href="{{ route('producto', 4)}}">Los Cuerudos con Gusano</a></li>
                <li><a href="{{ route('producto', 5)}}">Los Cuerudos Reposado</a></li>
                <li><a href="{{ route('producto', 6)}}">Los Cuerudos Añejo</a></li>
                <li><a href="{{ route('producto', 7)}}">Tehuana con Gusano</a></li>
                <li><a href="{{ route('producto', 8)}}">Licor de Cafe Huatulco</a></li>
                <li><a href="{{ route('producto', 9)}}">Margarita Huatulco</a></li>
            </ul>
    </div-->
     @yield('sub-content')
@stop
