@extends('layout_login')

@section('title', 'Recovery Password')

@section('content')
    <form id="login">
        <div><img src="images/bluebox-logo-white.svg" /></div>
        <p>
            <i class="fa fa-user"></i><input type="email" placeholder="E-mail"  autocomplete="off" autocorrect="off" auto capitalize="off" spellcheck="false"/> </p>
        <input type="submit" value="Recuperar">
        </div>
        <a href="">Cancelar</a>
    </form>
@endsection