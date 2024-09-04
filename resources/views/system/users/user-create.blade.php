@extends('main')

@section('title', 'Users')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Cadastro de Usuários</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">New User</li>
        </ol>
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-solid fa-users me-1"></i>
                        Informe os campos abaixo para prosseguir com o cadastro
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('register.create') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" aria-describedby="nameHelp">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
    </div>
@endsection
