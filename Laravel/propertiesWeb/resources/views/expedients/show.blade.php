@extends('layouts.app')

@section('content')
    <h1>Expedient Details</h1>

    <div>
        <strong>ID:</strong> {{ $expedient->id }}<br>
        <strong>Property:</strong> {{ $expedient->property->Address }}<br>
        <strong>Date:</strong> {{ $expedient->Date }}<br>
        <strong>Status:</strong> {{ $expedient->Status }}<br>
        <strong>Result:</strong> {{ $expedient->Result }}<br>
        <strong>Buyer:</strong> {{ $expedient->buyer->Name }}<br>
    </div>

    <div class="mt-4">
        <a href="{{ route('expedients.index') }}" class="btn btn-primary">Back to Expedient</a>
        <a href="{{ route('expedients.edit', $expedient->id) }}" class="btn btn-warning">Edit Expedient</a>
    </div>
@endsection
