@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Creación de usuario</div>

                    <div class="card-body">

                        <form id="myForm" action="{{route('user.update', ['id' => $user->id])}}" class="form-row"  method="post" >
                            @csrf

                            <div class="form-group col-md-6">
                                <label>Nombre Usuario</label>
                                <input type="text" id="user" name="name"  value="{{$user->name}}" class="form-control">
                                <input type="hidden" id="ide" value="{{$user->id}}">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Correo</label>
                                <input type="email" id="email" name="email" value="{{$user->email}}" class="form-control">
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
                                <button type="button" id="enviar" class="btn btn-primary"> Enviar</button>
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
         $('document').ready(function(){

                    let name = $('#user').val()
                    let email = $('#email').val()
                    let pass = $('#password').val()

             $('#enviar').click(function(){
                 if(name.length > 1){
                     //$('myForm').submit()
                     alert('debe llenar la infor: '+name)
                 }else{
                     alert('debe llenar la infor')
                 }
             })




        })
    </script>

@endsection
