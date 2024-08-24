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

                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
    </div>
@endsection
