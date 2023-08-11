@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Drivers</h1>
    <a href="{{ route('drivers.create') }}" class="btn btn-success mb-3">Create Driver</a>

    <div class="table-responsive">
        <table class="table table-striped">
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
                            <a href="{{ route('drivers.show', $driver) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('drivers.edit', $driver) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('drivers.destroy', $driver) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

