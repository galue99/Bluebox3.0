@extends('layout_content')

@section('title', 'BlueBox 3.0')

@section('content')
        <!-- MENU SECUNDIARIO -->
<ul id="s-menu">
    <li><a href="#.php"><i class="fa fa-user-plus"></i><span>Usuario</span></a></li>
    <li><a href="cData.php"><i class="fa fa-plus"></i><span>Nuevo</span></a></li>
</ul>

<!-- DESPLIEGUE DE PANELES
    Panel de lista de usuarios admin
 -->
<div id="bk-list">
    <h2>Usuarios</h2>
    <ul class="nombres">
        <li>Nombre</li>
    </ul>
</div>
@endsection