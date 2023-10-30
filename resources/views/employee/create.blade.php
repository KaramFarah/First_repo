@extends('layouts.app')

@section('content')
<div class="container" style="margin: 5%">
    

    <form action="{{route('employee.store')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text">Name Details</span>
            <input type="text" aria-label="first_name" class="form-control" name="first_name" placeholder="first name">
            <input type="text" aria-label="middle_name" class="form-control" name="middle_name" placeholder="middle name">
            <input type="text" aria-label="last_name" class="form-control" name="last_name" placeholder="last name">
            <input type="text" aria-label="mother_name" class="form-control" name="mother_name" placeholder="mother name">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Birth Details</span>
            <input type="text" aria-label="birth_place" class="form-control" name="birth_place" placeholder="Birth Location">
            <input type="date" aria-label="birthday" class="form-control" name="birthday" placeholder="Birth Day">
        </div>

        <div class="input-group mb-3" >
            <span class="input-group-text">Contacts</span>
            <input type="text" aria-label="address" class="form-control" name="address" placeholder="address">
            <input type="text" aria-label="landline" class="form-control" name="landline" placeholder="landline">
            <input type="text" aria-label="phone" class="form-control" name="phone" placeholder="phone">
        </div>

        <div class="input-group mb-3" >
            <span class="input-group-text">National & Passport Numbers</span>
            <input type="text" aria-label="First name" class="form-control" name="national_number" placeholder="National number">
            <input type="text" aria-label="Last name" class="form-control" name="passport_number" placeholder="Passport Number">
        </div >
            {{-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ HERE --}}
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Sex</label>
                <select class="form-select" id="inputGroupSelect01" name="sex">
                  <option selected>Choose...</option>
                  <option value="m">Male</option>
                  <option value="f">Female</option>
                </select>
              

                <label class="input-group-text" for="inputGroupSelect01">Title</label>
                    <select class="form-select" id="inputGroupSelect01" name="title">
                      <option selected>Choose...</option>
                      <option value="Mr">MR</option>
                      <option value="Ms">MS</option>
                      <option value="Dr">Dr</option>
                      <option value="Esq">Esq</option>
                    </select>
                
                <label class="input-group-text" for="inputGroupSelect01">Health Status</label>
                <select class="form-select" id="inputGroupSelect01" name="health_status">
                  <option selected>Choose...</option>
                  <option value="decent">decent</option>
                  <option value="handicapped">handicapped</option>
                </select>

                <label class="input-group-text" for="inputGroupSelect01">Socail Status</label>
                <select class="form-select" id="inputGroupSelect01" name="socail_status">
                  <option selected>Choose...</option>
                  <option value="married">married</option>
                  <option value="single">single</option>

                </select>

                <label class="input-group-text" for="inputGroupSelect01">Department Name</label>
                <select class="form-select" id="inputGroupSelect01" name="department_id">
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
