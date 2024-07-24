<!--users.blade.php-->

@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="tablasclientescont">
        <a class="linkstablasclientes" href="{{url('/usuarios')}}">Clientes</a>
        <a class="linkstablasclientes" href="{{url('/gestionadmin')}}">Administradores</a>
    </div>

    @yield('contentTables')
</div>

@endsection