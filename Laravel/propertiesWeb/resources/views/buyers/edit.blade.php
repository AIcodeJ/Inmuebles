@extends('layouts.app')

@section('content')
    <h2>Edit Buyer</h2>

    <form action="{{ route('buyers.update', $buyer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Name">Name:</label>
            <input type="text" name="Name" class="form-control" value="{{ $buyer->Name }}">
        </div>
        <div class="form-group">
            <label for="Contact">Contact:</label>
            <input type="text" name="Contact" class="form-control" value="{{ $buyer->Contact }}">
        </div>
        <div class="form-group">
            <label for="Budget">Budget:</label>
            <input type="number" name="Budget" class="form-control" value="{{ $buyer->Budget }}">
        </div>
        <div class="form-group">
            <label for="Preferences">Preferences:</label>
            <textarea name="Preferences" class="form-control">{{ $buyer->Preferences }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Buyer</button>
    </form>
    <br>
    <a href="{{ route('buyers.show', $buyer->id) }}" class="btn btn-secondary">Cancel</a>
@endsection
