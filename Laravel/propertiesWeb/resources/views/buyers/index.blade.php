@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Potential Buyers</h2>

        <!-- Button to navigate to the create page -->
        <a href="{{ route('buyers.create') }}" class="btn btn-primary">Add Buyer</a>

        <!-- Table to display the list of buyers -->
        @if(!empty($buyers) && count($buyers) > 0)
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Budget</th>
                    <th>Preferences</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($buyers as $buyer)
                    <tr>
                        <td>{{ $buyer->id }}</td>
                        <td>{{ $buyer->Name }}</td>
                        <td>{{ $buyer->Contact }}</td>
                        <td>{{ $buyer->Budget }}</td>
                        <td>{{ $buyer->Preferences }}</td>
                        <td>
                            <!-- View button -->
                            <a href="{{ route('buyers.show', $buyer->id) }}" class="btn btn-info btn-sm">View</a>
                            <!-- Edit button -->
                            <a href="{{ route('buyers.edit', $buyer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <!-- Add delete button -->
                            <form action="{{ route('buyers.destroy', $buyer->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <tr>
            <p colspan="6">No potential buyers available.</p>
        </tr>
        @endif
    </div>
@endsection
