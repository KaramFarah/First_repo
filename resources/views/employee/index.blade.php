@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection

@section('content')

            {{-- ADD EMPPLOYEES AND SEARCH --}}
<div class="container-xl">
    <div class="row">
        <div class="col-4">
            <a href="{{ route('employee.create') }}" class="btn btn-success" style="margin-bottom: 2%">add new user</a>
        </div>
        <div class="col-8">
            <form action="/search" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="search" value="{{isset($search) ? $search : ''}}">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
    </div>
            {{-- END OF ADD EMPPLOYEES AND SEARCH --}}

            <div class="card ">
                <div class="card-header">{{ __('Employees') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="table-responsive">
                        <table id="" class="display table-striped" style="width:100%" >
                    
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


@section('js')




<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>new DataTable('#example');</script>
@endsection

