@extends('layouts.main')

@section('content')
    <h1>Drivers</h1>

    <a href="{{ route('drivers.create') }}" class="btn btn-success">Create Driver</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>License Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drivers as $driver)
                <tr>
                    <td>{{ $driver->id }}</td>
                    <td>{{ $driver->name }}</td>
                    <td>{{ $driver->email }}</td>
                    <td>{{ $driver->phone }}</td>
                    <td>{{ $driver->license_number }}</td>
                    <td>
                        <a href="{{ route('drivers.show', $driver) }}" class="btn btn-info">View</a>
                        <a href="{{ route('drivers.edit', $driver) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('drivers.destroy', $driver) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
