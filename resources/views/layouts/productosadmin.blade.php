<!--users.blade.php-->

@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="tablasclientescont">
        <a class="linkstablastipoproductos" href="{{url('/camisetas')}}">Camisetas</a>
        <a class="linkstablasclientes" href="{{url('/botines')}}">Botines</a>
    </div>

    @yield('contentTables')
</div>

@endsection
