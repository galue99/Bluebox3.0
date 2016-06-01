<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <!-- disable iPhone inital scale -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Bluebox 3.0</title>
    <META NAME="description" CONTENT="Gestor de contenidos">
    <meta name="classification" content="Gestor de contenidos" />
    <meta name="copyright" content="ICON" />
    <meta name="author" content="Ocean DevGroup"  />
    <link rel="author" content="Ocean DevGroup" title="Ocean Development Group" href="https://www.oceandg.com">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!--  MAIN CSS -->
    <link href="{!! asset('css/estilos.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/font-awesome.css') !!}" media="all" rel="stylesheet" type="text/css" />

</head>

<body>
<ul id="menu">
    <li class="logo"><img src="images/bluebox-logo.svg" height="30" /></li>
    <li><a href="{{ URL::to('/home') }}"><i class="fa fa-tachometer fa-2x"></i><span>Tablero</span></a></li>
    <li><a href="#"><i class="fa fa-th-large fa-2x"></i><span>Contenido</span></a>
        <ul>
            <li><a href="{{ URL::to('/home') }}">P&aacute;gina principal</a></li>
            <li><a href="{{ URL::to('/home') }}">Perfil</a></li>
            <li><a href="{{ URL::to('/home') }}">Grupo de trabajo</a></li>
            <li><a href="{{ URL::to('/home') }}">Contacto</a></li>
        </ul>
    </li>
    <li><a href="#"><i class="fa fa-th-list fa-2x"></i><span>Secciones</span></a>
        <ul>
            <li><a href="{{ URL::to('/home') }}">Tipos</a></li>
            <li><a href="{{ URL::to('/home') }}">Categor&iacute;as</a></li>
            <li><a href="{{ URL::to('/home') }}">Sub Categor&iacute;as</a></li>
            <li><a href="{{ URL::to('/home') }}">Secci&oacute;n</a></li>
        </ul>
    </li><h1></h1>
    <li><a href="{{ URL::to('/home') }}"><i class="fa fa-toggle-right fa-2x"></i><span>Slider</span></a></li>
    <li><a href="{{ URL::to('/home') }}"><i class="fa fa-bullhorn fa-2x"></i><span>Anuncios</span></a></li>
    <li><a href="{{ URL::to('/home') }}"><i class="fa fa-filter fa-2x"></i><span>Foonel</span></a></li>
    <li><a href="{{ URL::to('/home') }}"><i class="fa fa-calculator fa-2x"></i><span>Facturaci&oacute;n</span></a></li>
    <li><a href="{{ URL::to('/home') }}"><i class="fa fa-gears fa-2x"></i><span>Configuraci&oacute;n</span></a></li>
</ul>


<div id="bk-content">

    <ul id="header">
        <li class="notificaciones"><a href="index.php"><i class="fa fa-bell fa-2x"></i><div>3</div></li>
        <li class="perfil"><span>Jose Valderrama</span><a href="#"><img src="images/users/user-sample.jpg" /><i class="fa fa-chevron-down"></i></a>
            <ul>
                <li><a href="{{ URL::to('/home') }}"><i class="fa fa-user"></i>Perfil</a></li>
                <li><a href="{{ URL::to('/home') }}"><i class="fa fa-question-circle"></i>Ayuda</a></li>
                <li><a href="{{ URL::to('/logout') }}"><i class="fa fa-sign-out"></i>Salir</a></li>
            </ul>
        </li>
    </ul>

    @yield('content')

    <footer>&copy; 2016 All rights reserved to Ocean DevGroup</footer>
</div>
</body>
</html>