<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showEmployeeList(Request $request)
    {

        $query = Employee::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('phone')) {
            $query->where('phone', 'like', '%' . $request->phone . '%');
        }

        if ($request->filled('position')) {
            $query->where('position', 'like', '%' . $request->position . '%');
        }

        if ($request->filled('hire_date')) {
            $query->whereDate('hire_date', $request->hire_date);
        }


        // Menambahkan pagination
        $employees = $query->paginate(5); // Ganti 10 dengan jumlah item per halaman yang diinginkan

        return view('employees.employeeList', compact('employees'));
    }

    public function create()
    {
        return view('employees.createForm');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required',
            'phone' => 'required|min:12|numeric',
            'position' => 'required',
            'hire_date' => 'required'
        ]);

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->position = $request->position;
        $employee->hire_date = $request->hire_date;

        $employee->save();
        return redirect()->route('employees')->with('success', trans('message.msg-success-create-employee'));
    }

    public function edit($id)
    {
        $updateData = Employee::find($id);
        return view('employees.editForm')->with([
            'listEmployee' => $updateData
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required',
            'phone' => 'required|min:12|numeric',
            'position' => 'required',
            'hire_date' => 'required'
        ]);

        $employee = Employee::find($id);
        $employee->update($request->all());
        return redirect()->route('employees')->with('success', trans('message.msg-success-update-employee'));
    }

    public function destroy($id)
    {
        $data = Employee::find($id);
        $data->delete($id);
        return redirect()->route('employees')->with('success', trans('message.msg-success-delete-employee'));
    }
}
