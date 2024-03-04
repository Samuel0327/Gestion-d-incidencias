@extends('layout.app')

@section('title','Register')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Register</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Name" id="name" name="name">
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                        </div>

                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                        </div>

                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation">
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection