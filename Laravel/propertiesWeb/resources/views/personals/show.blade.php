@extends('layouts.app')

@section('content')
    <h1>Personal Details</h1>

    <ul>
        <li><strong>ID:</strong> {{ $personal->id }}</li>
        <li><strong>User:</strong> {{ $personal->User }}</li>
        <li><strong>Role:</strong> {{ $personal->Role }}</li>
    </ul>

    <div class="mt-3">
        <a href="{{ route('personals.index') }}" class="btn btn-primary">Back to Personal</a>
        <a href="{{ route('personals.edit', $personal->id) }}" class="btn btn-warning">Edit Personal</a>
    </div>

    <div class="mt-3">
        <form action="{{ route('personals.destroy', $personal->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this personnel?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Personal</button>
        </form>
    </div>
@endsection
