@extends('layouts.app')

@section('content')
    <h1>Expedient</h1>
    
    <a href="{{ route('expedients.create') }}" class="btn btn-success">Create a new Expedient</a>

    @if(!empty($expedients) && count($expedients) > 0)
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Address</th>
                <th>Date</th>
                <th>Status</th>
                <th>Result</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($expedients as $expedient)
                <tr>
                    <td>{{ $expedient->id }}</td>
                    <td>{{ $expedient->property->Address }}</td>
                    <td>{{ $expedient->Date }}</td>
                    <td>{{ $expedient->Status }}</td>
                    <td>{{ $expedient->Result }}</td>
                    <td>{{ $expedient->buyer->Name }}</td>
                    <td>
                        <a href="{{ route('expedients.show', $expedient->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('expedients.edit', $expedient->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('expedients.destroy', $expedient->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <tr>
        <p colspan="5">No properties found.</p>
    </tr>
    @endif
@endsection
