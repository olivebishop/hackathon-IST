@extends('layouts.app')

@section('content')
    <h1>Edit Driver</h1>

    @include('partials.errors')

    <form action="{{ route('drivers.update', $driver) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $driver->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $driver->email }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $driver->phone }}" required>
        </div>
        <div class="form-group">
            <label for="license_number">License Number</label>
            <input type="text" name="license_number" class="form-control" value="{{ $driver->license_number }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
