<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        $departments = Department::all();
        return view('employee.index' , compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        return view('employee.create' , compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'middle_name'=> 'required|string',
            'mother_name'=> 'required|string',
            'birth_place'=> 'required|string',
            'birthday'=> 'required',
            'sex'=> 'required',
            'title'=> 'required|string',
            'national_number'=> 'required|string',
            'passport_number'=> 'required|string',
            'address'=> 'required|string',
            'landline'=> 'required|digits:7',
            'phone'=> 'required|digits:10|unique:employees,phone',
            'department_id'=> 'required|integer',
            'health_status'=> 'required',
            'socail_status'=> 'required',
        ],
            [
                'landline.unique'  => 'This Landline is already Taken',
                'phone.unique'     => 'This phone Number is already Taken',
                'landline.digits'  => 'This field should contain a number of 7 digits',
                'phone.digits'     => 'This field should contain a number of 10 digits'
            ]
        
    );
        Employee::create($request->all());
        session()->flash('Add', 'EMPLOYEE HAS BEEN ADDED SUCCESSFULLY ');
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        $emp = $employee;
        return view('employee.show' , compact('emp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $emp = $employee;
        $departments = Department::all();
        return view('employee.edit' , compact('emp' , 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    
    {
        $this->validate($request , [
            
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'middle_name'=> 'required|string',
            'mother_name'=> 'required|string',
            'birth_place'=> 'required|string',
            'birthday'=> 'required',
            'sex'=> 'required',
            'title'=> 'required|string',
            'national_number'=> 'required|string',
            'passport_number'=> 'required|string',
            'address'=> 'required|string',

            'landline'=> [ 'required',
                            'digits:7',
                            Rule::unique('employees')->ignore($employee)],

            'phone'=> [ 'required',
                        'digits:10',
                        Rule::unique('employees')->ignore($employee)],

            'department_id'=> 'required|integer',
            'health_status'=> 'required',
            'socail_status'=> 'required',
            
        ],[
            'landline.unique'  => 'This Landline is already Taken',
            'phone.unique'     => 'This phone Number is already Taken',
            'landline.digits'  => 'Landline must be of 7 digits',
            'phone.digits'     => 'Phone Number must be of 10 digits'
        ]
    );

        $employee->update($request->all());
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index');
    }


    public function search(Request $request){
        $search = $request->search;
        $employees = Employee::where(function($query) use ($search){
            $query->where('first_name' , 'like' , "%$search%")
            ->orWhere('last_name' , 'like' , "%$search%")
            ->orWhere('middle_name' , 'like' , "%$search%")
            ->orWhere('birthday' , 'like' , "%$search%")
            ->orWhere('sex' , 'like' , "%$search%")
            ->orWhere('national_number' , 'like' , "%$search%")
            ->orWhere('passport_number' , 'like' , "%$search%");
        })
        ->orWhereHas('department' , function($query) use($search){
            $query->where('name' , 'like' , "%$search%");
        })->get();

        return view('employee.index' , compact('employees' , 'search'));
    }
        
}
