@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Creación de usuario</div>

                    <div class="card-body">

                        <form action="{{ route('user.store')  }}" class="form-row" method="POST">
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
                                <button type="submit" class="btn btn-primary"> Enviar</button>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
       // function validarPassword(){
       //
       // }

       $('document').ready(function(){

       })
    </script>

@endsection
