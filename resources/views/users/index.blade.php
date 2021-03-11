@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        <a href="/user/create" class="btn btn-primary mb-3">Crear usuario</a>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href="/user/edit/{{$user->id}}" class="btn btn-warning"> <i class="fas fa-edit"></i> </a>

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>
                            {{ $users->links() }}
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
