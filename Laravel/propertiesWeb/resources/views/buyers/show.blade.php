@extends('layouts.app')

@section('content')
    <h2>Buyer Details</h2>

    <p><strong>ID:</strong> {{ $buyer->id }}</p>
    <p><strong>Name:</strong> {{ $buyer->Name }}</p>
    <p><strong>Contact:</strong> {{ $buyer->Contact }}</p>
    <p><strong>Budget:</strong> {{ $buyer->Budget }}</p>
    <p><strong>Preferences:</strong> {{ $buyer->Preferences }}</p>

    <a href="{{ route('buyers.edit', $buyer->id) }}" class="btn btn-warning">Edit Buyer</a>

    <!-- Delete button (optional) -->
    <form action="{{ route('buyers.destroy', $buyer->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this buyer?')">Delete Buyer</button>
    </form>
    
    <a href="{{ route('buyers.index') }}" class="btn btn-secondary">Back to Buyers</a>
@endsection
