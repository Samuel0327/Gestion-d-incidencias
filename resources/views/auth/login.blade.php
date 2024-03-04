@extends('layout.app')

@section('title', 'Login')

@section('content')

<div class="container my-12">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border border-gray-200 rounded-lg">
                <div class="card-header bg-white">
                    <h1 class="text-5xl text-center pt-4">Login</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                        </div>

                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                        </div>

                        @error('message')
                        <div class="mb-3">
                            <p class="border border-red-500 rounded-md bg-red-100 text-red-600 p-2">* {{ $message }}</p>
                        </div>
                        @enderror

                        <a href="{{ url('alumnos')}}" class="btn btn-secondary">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection