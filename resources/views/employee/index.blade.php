@extends('layouts.app')

@section('content')
<div class="container-xl">
    <a href="{{ route('employee.create') }}" class="btn btn-primary" style="margin-bottom: 2%">add new user</a>
            <div class="card ">
                <div class="card-header">{{ __('Employees') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
<div class="table-responsive">
    <table id="example" class="table table-striped" >

        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>Birthday</th>
                <th>Sex</th>
                <th>Passport Number</th>
                <th>Phone Number</th>
                <th>department Name</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($employees as $employee)
            
        <tbody>
           <tr>
            <td>{{$employee->first_name}}</td>
            <td>{{$employee->last_name}}</td>
            <td>{{$employee->middle_name}}</td>
            <td>{{$employee->birthday}}</td>
            <td>{{$employee->sex}}</td>
            <td>{{$employee->passport_number}}</td>
            <td>{{$employee->phone}}</td>
            <td>{{$employee->department->name}}</td>
            <td> 
                    <a href="{{ route('employee.show',$employee->id) }}" class="btn btn-secondary d-inline-flex p-2 bd-highlight">Show</a>

                    <a href="{{ route('employee.edit',$employee->id) }}" class="btn btn-primary d-inline-flex p-2 bd-highlight">Edit</a>

                    <form action="{{ route('employee.destroy',$employee->id) }}" method="post" class="mb-2 d-inline-flex bd-highlight">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" >delete</button>
                    </form>

            </td>
           </tr>
        </tbody>
        @endforeach
     

       
    </table>

</div>
  
                </div>



                


            </div>
</div>
@endsection




