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
    public function showEmployeeList()
    {
        return view('employees.employeeList', [
            'employeeList' => Employee::all()
        ]);
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
