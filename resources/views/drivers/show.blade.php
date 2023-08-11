@extends('layouts.app')

@section('content')
    <h1>Driver Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $driver->name }}</h5>
            <p class="card-text">Email: {{ $driver->email }}</p>
            <p class="card-text">Phone: {{ $driver->phone }}</p>
            <p class="card-text">License Number: {{ $driver->license_number }}</p>
        </div>
    </div>

    <a href="{{ route('drivers.edit', $driver) }}" class="btn btn-primary mt-3">Edit Driver</a>
@endsection
