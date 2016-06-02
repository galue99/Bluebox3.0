@extends('layout_content')

@section('title', 'BlueBox 3.0')

@section('content')
        <!-- MENU SECUNDIARIO -->
<ul id="s-menu">
    <li><a href="#.php"><i class="fa fa-user-plus"></i><span>Usuario</span></a></li>
    <li><a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-plus"></i><span>Nuevo</span></a></li>
</ul>

<!-- DESPLIEGUE DE PANELES
    Panel de lista de usuarios admin
 -->

<!--<div id="bk-list">
    <h2>Usuarios</h2>
    <ul class="nombres">
        <li>Nombre</li>
    </ul>
</div>-->
@endsection


<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Agregar Usuario <i class="fa fa-user-plus"></i></h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/home" id="formulario" name="formulario">
                    {!! csrf_field() !!}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Username:</label>
                            <input type="text" name="username" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Password:</label>
                            <input type="text" name="password" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Nombre:</label>
                            <input type="text" name="name" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Apellido:</label>
                            <input type="text" name="lastname" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Email:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Documento Identidad:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Telefono:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Celular:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Calle:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Numero:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Edificio:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Apto:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Sector:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Provincia:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Nombre Secundario:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Apellido Secundario:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Documento Identidad:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Fecha de Nacimiento:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Foto:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Zona:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Categoria:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Nombre Tutor:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Apelido Tutor:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Nickname:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="border: none">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" value="Conectar" data-dismiss="modal" class="btn btn-primary">
                <button type="button" class="btn btn-primary" id="btn_add">Save changes</button>
            </div>
        </div>
    </div>
</div>


<meta name="_token" content="{!! csrf_token() !!}" />