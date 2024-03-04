@extends('layout/template')

@section('title', 'Alumnos | Escuela')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Listado de alumnos</h2>

        <a href="{{ url('alumnos/create') }}" class="btn btn-primary btn-sm">Nuevo registro</a>

        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Descripción</th>
                    <th>Nombre</th>
                    <th>Fecha de Incidencia</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Nivel</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->matricula }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->fecha_nacimiento }}</td>
                    <td>{{ $alumno->telefono }}</td>
                    <td>{{ $alumno->email }}</td>
                    <td>{{ $alumno->nivel->nombre }}</td>
                    <td>
                        <a href="{{ url('alumnos/'.$alumno->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td>
                        <form action="{{ url('alumnos/'.$alumno->id) }}" method="post">
                            @method("DELETE")
                            @csrf
                            <a href="https://wa.me/+34695449935?text="
                                        class="btn btn-outline-warning" target="_blank">WhatsApp</a>
                                          <a href="https://mail.google.com/mail/u/0/#inbox?compose=new"
                                        class="btn btn-outline-warning" target="_blank">Gmail</a>
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

@endsection