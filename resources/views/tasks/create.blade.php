@extends('tasks.layouts')

@section('content')
    <div class="container py-3">
        <h1 class="mb-4">Crear Tarea</h1>
        <hr>
        <form action="/tasks" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" name="description" id="description" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crear Tarea</button>
        </form>
    </div>
@endsection