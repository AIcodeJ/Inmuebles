@extends('layouts.app')

@section('content')
    <h1>Edit Record</h1>

    <form action="{{ route('expedients.update', $expedient->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="property">Property:</label>
            <select name="property_id" class="form-control">
                @foreach($properties as $id => $IDProperty)
                    <option value="{{ $id }}">{{ $IDProperty }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="Date" class="form-control" value="{{ $expedient->Date }}">
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" name="Status" class="form-control" value="{{ $expedient->Status }}">
        </div>

        <div class="form-group">
            <label for="result">Result:</label>
            <input type="text" name="Result" class="form-control" value="{{ $expedient->Result }}">
        </div>

        <div class="form-group">
            <label for="buyer">Buyer:</label>
            <select name="buyer_id" class="form-control">
                @foreach($buyers as $id => $Name)
                    <option value="{{ $id }}">{{ $Name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update Record</button>
    </form>
@endsection
