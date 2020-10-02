<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $emps = Employee::all();

        return view('emp-index', compact('emps'));
    }

    public function show($id)
    {
        $emp = Employee::findOrFail($id);
        $locs = Location::all();

        return view('emp-show', compact('emp', 'locs'));
    }

    public function save(Request $request, $id) {

        $data = $request -> all();

        $emp = Employee::findOrFail($id);

        $emp -> update($data);

        return redirect() -> route('emp-show', $id);

    }

    public function destroy($id) {

        $emp = Employee::findOrFail($id);

        $emp -> delete($id);

        return redirect() -> route('emp-index');
    }


}
