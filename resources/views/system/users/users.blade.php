@extends('main')

@section('title', 'Users')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Relação de Usuários</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Users</li>
        </ol>
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-solid fa-users me-1"></i>
                        Lista de usuários cadastrados
                    </div>
                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Name</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Permissions</th>
                            </tr>
                            </thead>
                            <tbody class="table-group-divider">

                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @foreach($user->permissions as $permission)
                                            {{ $permission }},
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="container-fluid">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
    </div>
@endsection
