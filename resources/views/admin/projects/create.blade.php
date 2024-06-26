@extends('layouts.admin')

@section('content')
<form action="{{ route("admin.projects.store") }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
    </div>

    <button type="submit">Aggingi</button>
</form>
@endsection