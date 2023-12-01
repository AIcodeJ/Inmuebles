@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">Property Details</h1>

        <div class="row">
            <div class="col-md-6">
                <p><strong>ID:</strong> {{ $property->IDProperty }}</p>
                <p><strong>Address:</strong> {{ $property->Address }}</p>
                <p><strong>Description:</strong>{{ $property->Description }}</p>
                <p><strong>Estimated Value:</strong> ${{ number_format($property->EstimatedValue, 2) }}</p>
                <p><strong>Status:</strong> {{ $property->Status }}</p>
                <p><strong>Property Distribution:</strong> {{ $property->PropertyDistribution }}</p>
                <p><strong>Construction Area:</strong> {{ $property->ConstructionArea }} m²</p>
                <p><strong>Surface Area:</strong> {{ $property->SurfaceArea }} m²</p>
                <p><strong>Municipality:</strong> {{ $property->Municipality }}</p>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('properties.index') }}" class="btn btn-primary">Back to Properties</a>
            <a href="{{ route('properties.edit', $property->IDProperty) }}" class="btn btn-warning">Edit Property</a>
        </div>
    </div>
@endsection
