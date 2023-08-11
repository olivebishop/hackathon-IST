@extends('layouts.main')

@section('content')
    <h1>Create Driver</h1>

    <form action="{{ route('drivers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="license_number">License Number</label>
            <input type="text" name="license_number" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
