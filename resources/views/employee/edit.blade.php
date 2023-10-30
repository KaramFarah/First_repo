@extends('layouts.app')

@section('content')
<div class="container" style="margin: 5%">
    

    <form action="{{route('employee.update' , $emp)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-group mb-3">
            <span class="input-group-text">Name Details</span>
            <input type="text" aria-label="first_name" class="form-control" name="first_name" value="{{$emp->first_name}}">
            <input type="text" aria-label="middle_name" class="form-control" name="middle_name" value="{{$emp->middle_name}}">
            <input type="text" aria-label="last_name" class="form-control" name="last_name" value="{{$emp->last_name}}">
            <input type="text" aria-label="mother_name" class="form-control" name="mother_name" value="{{$emp->mother_name}}">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Birth Details</span>
            <input type="text" aria-label="birth_place" class="form-control" name="birth_place" value="{{$emp->birth_place}}">
            <input type="date" aria-label="birthday" class="form-control" name="birthday" value="{{$emp->birthday}}">
        </div>

        <div class="input-group mb-3" >
            <span class="input-group-text">Contacts</span>
            <input type="text" aria-label="address" class="form-control" name="address" value="{{$emp->address}}">
            <input type="text" aria-label="landline" class="form-control" name="landline" value="{{$emp->landline}}">
            <input type="text" aria-label="phone" class="form-control" name="phone" value="{{$emp->phone}}">
        </div>

        <div class="input-group mb-3" >
            <span class="input-group-text">National & Passport Numbers</span>
            <input type="text" aria-label="First name" class="form-control" name="national_number" value="{{$emp->national_number}}">
            <input type="text" aria-label="Last name" class="form-control" name="passport_number" value="{{$emp->passport_number}}">
        </div >
            {{-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ HERE --}}
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Sex</label>
                <select class="form-select" id="inputGroupSelect01" name="sex" value="{{$emp->sex}}">
                  <option selected>Choose...</option>
                  <option value="m">Male</option>
                  <option value="f">Female</option>
                </select>
              

                <label class="input-group-text" for="inputGroupSelect01">Title</label>
                    <select class="form-select" id="inputGroupSelect01" name="title" value="{{$emp->title}}">
                      <option selected>Choose...</option>
                      <option value="Mr">MR</option>
                      <option value="Ms">MS</option>
                      <option value="Dr">Dr</option>
                      <option value="Esq">Esq</option>
                    </select>
                
                <label class="input-group-text" for="inputGroupSelect01">Health Status</label>
                <select class="form-select" id="inputGroupSelect01" name="health_status" value="{{$emp->health_status}}">
                  <option selected>Choose...</option>
                  <option value="decent">decent</option>
                  <option value="handicapped">handicapped</option>
                </select>

                <label class="input-group-text" for="inputGroupSelect01">Socail Status</label>
                <select class="form-select" id="inputGroupSelect01" name="socail_status" value="{{$emp->socail_status}}">
                  <option selected>Choose...</option>
                  <option value="married">married</option>
                  <option value="single">single</option>

                </select>

                <label class="input-group-text" for="inputGroupSelect01">Department Name</label>
                <select class="form-select" id="inputGroupSelect01" name="department_id" value="{{$emp->department->name}}">
                  <option selected>Choose...</option>
                  <option value= '1'>IT</option>
                  <option value= '2'>service</option>
                  <option value= '3'>Customer Support</option>
                </select>


            </div>



            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
        
                <a class="btn btn-primary" href="{{ route('employee.index') }}">cancel</a>
            </div>
    </form>
 
    




    <div class="contanier" style="margin-top: 10px">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

</div>

@endsection
