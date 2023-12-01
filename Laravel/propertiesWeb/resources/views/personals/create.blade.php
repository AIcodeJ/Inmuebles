@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Personal</h1>

        <form action="{{ route('personals.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="User" class="form-label">User</label>
                <input type="text" class="form-control" id="User" name="User" required>
            </div>

            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" name="Password" required>
            </div>

            <div class="mb-3">
                <label for="Role" class="form-label">Role</label>
                <input type="text" class="form-control" id="Role" name="Role" required>
            </div>

            <button type="submit" class="btn btn-success">Save Personal</button>
        </form>
    </div>
@endsection
