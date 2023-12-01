@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Properties</h1>

        <a href="{{ route('properties.create') }}" class="btn btn-success mb-3">Add Property</a>

        @if(!empty($properties) && count($properties) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Address</th>
                    <th>Description</th>
                    <th>Estimated Value</th>
                    <th>Status</th>
                    <th>Property Distribution</th>
                    <th>Construction Area</th>
                    <th>Surface Area</th>
                    <th>Municipality</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($properties as $property)
                    <tr>
                        <td>{{ $property->IDProperty }}</td>
                        <td>{{ $property->Address }}</td>
                        <td>{{ $property->Description }}</td>
                        <td>${{ number_format($property->EstimatedValue, 2) }}</td>
                        <td>{{ $property->Status }}</td>
                        <td>{{ $property->PropertyDistribution }}</td>
                        <td>{{ $property->ConstructionArea }}</td>
                        <td>{{ $property->SurfaceArea }}</td>
                        <td>{{ $property->Municipality }}</td>
                        <td>
                            <a href="{{ route('properties.show', $property->IDProperty) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('properties.edit', $property->IDProperty) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('properties.destroy', $property->IDProperty) }}" method="POST" style="display: inline;">
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
            <p colspan="5">No properties found.</p>
        </tr>
        @endif
    </div>
@endsection
