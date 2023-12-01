@extends('layouts.app')

@section('content')
    <h2>Add New Buyer</h2>

    <form action="{{ route('buyers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Name">Name:</label>
            <input type="text" name="Name" class="form-control">
        </div>
        <div class="form-group">
            <label for="Contact">Contact:</label>
            <input type="text" name="Contact" class="form-control">
        </div>
        <div class="form-group">
            <label for="Budget">Budget:</label>
            <input type="number" name="Budget" class="form-control">
        </div>
        <div class="form-group">
            <label for="Preferences">Preferences:</label>
            <textarea name="Preferences" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save Buyer</button>
    </form>
@endsection
