@extends('layout_login')

@section('title', 'BlueBox 3.0')

@section('content')
    <form id="login" method="POST" action="/login">
        {!! csrf_field() !!}
        <div><img src="images/bluebox-logo-white.svg" /></div>
        <p>
            <i class="fa fa-user"></i><input type="text" name="username" placeholder="Usuario"  autocomplete="off" autocorrect="off" auto capitalize="off" spellcheck="false"/> </p>
        <p><i class="fa fa-key"></i><input type="password" name="password" placeholder="Contrase&ntilde;a" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" /></p>
        <div><input type="checkbox" id="showpass">
            <label for="showpass">Mostrar Contrase&ntilde;a</label>
            <input type="submit" value="Conectar">
        </div>
        <a href="recuperar-pass.php">&iquest;Olvid&oacute; contrase&ntilde;a?</a>
    </form>
@endsection