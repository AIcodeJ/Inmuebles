@extends('layouts.app')

@section('content')
    <h1>Add Expedient</h1>

    <form action="{{ route('expedients.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="property_id">Property:</label>
            <select name="property_id" class="form-control">
                @foreach($properties as $id => $IDProperty)
                    <option value="{{ $id }}">{{ $IDProperty }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="Date">Date:</label>
            <input type="date" name="Date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Status">Status:</label>
            <input type="text" name="Status" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Result">Result:</label>
            <input type="text" name="Result" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="buyer_id">Buyer:</label>
            <select name="buyer_id" class="form-control">
                @foreach($buyers as $id => $Name)
                    <option value="{{ $id }}">{{ $Name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Save Expedient</button>
    </form>
@endsection
