@extends('layouts.app')

@section('content')
    <h1>Create Property</h1>

    <form action="{{ route('properties.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="Address" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="Description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="estimated_value">Estimated Value:</label>
            <input type="text" name="EstimatedValue" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" name="Status" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="property_distribution">Property Distribution:</label>
            <textarea name="PropertyDistribution" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="construction_area">Construction Area (m²):</label>
            <input type="number" name="ConstructionArea" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="surface_area">Surface Area (m²):</label>
            <input type="number" name="SurfaceArea" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="municipality">Municipality:</label>
            <input type="text" name="Municipality" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Create Property</button>
    </form>
@endsection
