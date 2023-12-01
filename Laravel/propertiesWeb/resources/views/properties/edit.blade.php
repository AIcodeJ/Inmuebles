@extends('layouts.app')

@section('content')
    <h1>Edit Property</h1>

    <form action="{{ route('properties.update', $property->IDProperty) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="Address" class="form-control" value="{{ $property->Address }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="Description" class="form-control" value="{{ $property->Description }}" required>
        </div>

        <div class="form-group">
            <label for="estimated_value">Estimated Value:</label>
            <input type="text" name="EstimatedValue" class="form-control" value="{{ $property->EstimatedValue }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" name="Status" class="form-control" value="{{ $property->Status }}" required>
        </div>

        <div class="form-group">
            <label for="property_distribution">Property Distribution:</label>
            <textarea name="PropertyDistribution" class="form-control" required>{{ $property->PropertyDistribution }}</textarea>
        </div>

        <div class="form-group">
            <label for="construction_area">Construction Area (m²):</label>
            <input type="number" name="ConstructionArea" class="form-control" value="{{ $property->ConstructionArea }}" required>
        </div>

        <div class="form-group">
            <label for="surface_area">Surface Area (m²):</label>
            <input type="number" name="SurfaceArea" class="form-control" value="{{ $property->SurfaceArea }}" required>
        </div>

        <div class="form-group">
            <label for="municipality">Municipality:</label>
            <input type="text" name="Municipality" class="form-control" value="{{ $property->Municipality }}" required>
        </div>

        <button type="submit" class="btn btn-warning">Update Property</button>
    </form>
@endsection

