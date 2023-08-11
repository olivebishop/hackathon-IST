<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Http\Requests\CreateDriverRequest;
use App\Http\Requests\UpdateDriverRequest;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        return view('drivers.index', compact('drivers'));
    }

    public function create()
    {
        return view('drivers.create');
    }

    public function store(CreateDriverRequest $request)
    {
        Driver::create($request->validated());
        return redirect()->route('drivers.index')->with('success', 'Driver created successfully.');
    }

    public function show(Driver $driver)
    {
        return view('drivers.show', compact('driver'));
    }

    public function edit(Driver $driver)
    {
        return view('drivers.edit', compact('driver'));
    }

    public function update(UpdateDriverRequest $request, Driver $driver)
    {
        $driver->update($request->validated());
        return redirect()->route('drivers.index')->with('success', 'Driver updated successfully.');
    }

    public function destroy(Driver $driver)
    {
        $driver->delete();
        return redirect()->route('drivers.index')->with('success', 'Driver deleted successfully.');
    }
}
