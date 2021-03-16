@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Usuarios</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">

                        <form action="{{ route('user.store')  }}" class="form-row" method="POST" id="myform">
                            @csrf

                            <div class="form-group col-md-6">
                                <label>Nombre Usuario</label>
                                <input type="text" id="user" name="campo1"  class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Correo</label>
                                <input type="email" id="email" name="campo2" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Contraseña</label>
                                <input type="password" id="password" name="password"  class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Confirmar Contraseña</label>
                                <input type="password" id="password_confirm" name="password_confirm" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6 fa-pull-left">
                                    <button type="button" class="btn btn-primary" onclick="enviar();"> Enviar</button>
                                </div>

                                <div class="col-md-6 fa-pull-left">
                                    <a href="{{ redirect()->back()->getTargetUrl() }}"  class="btn btn-warning"> Regresar</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

        function enviar(){
            let contra =  $('#password').val()
            if(contra.length < 8){

                alert('La contraseña debe ser mayor a 8 caracteres')

            }else{
                $("#myform").submit()
            }

        }
    </script>

@endsection
