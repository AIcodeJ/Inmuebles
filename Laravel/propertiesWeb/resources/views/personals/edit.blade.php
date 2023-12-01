@extends('layouts.app')

@section('content')
    <h1>Edit Personal</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('personals.update', $personal->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="User" class="form-label">User</label>
            <input type="text" class="form-control" id="User" name="User" value="{{ old('User', $personal->User) }}" required>
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password" name="Password" required>
        </div>
        <div class="mb-3">
            <label for="Role" class="form-label">Role</label>
            <input type="text" class="form-control" id="Role" name="Role" value="{{ old('Role', $personal->Role) }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update Personal</button>
    </form>
@endsection
