@extends('layouts.app')

@section('content')

{{-- <style>
    .form-control , form-select {
    
    border-width: 3px;
}

    .form-control:invalid{
    box-shadow: red;
    border-color: rgb(247, 98, 98); 
}
</style> --}}

<div class="container" style="margin: 5%">

    {{-- {{session('cart'); $request->name;}} --}}
    

    

    <form action="{{route('employee.store')}}" method="POST" class="g-3 needs-validation">
        @csrf


        <div class="col-md-4">
        <label for="validationServer0" class="form-label">First name</label>
        <input type="text" class="form-control"  name="first_name" placeholder="first name" id="validationServer0" value="{{$emp->first_name}}" required>
        <small style="color: red">
            @error('first_name')
                {{$message}}
            @enderror
        </small>
        </div>
        <br>
        
        <div class="col-md-4">
        <label for="validationServer1" class="form-label">middle name</label>
        <input type="text" class="form-control"  name="middle_name" placeholder="middle name" id="validationServer1" value="{{$emp->middle_name}}" required>
        <small style="color: red">
            @error('middle_name')
                {{$message}}
            @enderror
        </small>
        </div>
        <br>

        <div class="col-md-4">
        <label for="validationServer2" class="form-label">last name</label>
        <input type="text" class="form-control" id="validationServer2" name="last_name" placeholder="last name" value="{{$emp->last_name}}" required>
        <small style="color: red">
            @error('last_name')
                {{$message}}
            @enderror
        </small>
        </div>
        <br>
        
        <div class="col-md-4">
            <label for="validationServer3" class="form-label">Mother name</label>
        <input type="text" class="form-control"  name="mother_name" placeholder="mother name" id="validationServer3" value="{{$emp->mother_name}}" required>
        <small style="color: red">
            @error('mother_name')
                {{$message}}
            @enderror
        </small>
        </div>

        <br>

        <div>
            <input type="text" class="form-control" name="landline" placeholder="landline" id="validationServer7" value="{{$emp->landline}}" required>
            <small style="color: red">
                @error('landline')
                    {{$message}}
                @enderror
            </small>
        </div>

        <br>

        <div>
            <input type="text" class="form-control" name="phone" placeholder="phone" id="validationServer8" value="{{$emp->phone}}" required>
            <small style="color: red">
                @error('phone')
                    {{$message}}
                @enderror
            </small>
        </div>
        <br>

        <div>
            <input type="text"  class="form-control" name="birth_place" placeholder="Birth Location" id="validationServer4" value="{{$emp->birth_place}}" required>
            <small style="color: red">
                @error('birth_place')
                    {{$message}}
                @enderror
            </small>
        </div>
        <br>
        <div>
            <input type="date"  class="form-control" name="birthday" placeholder="Birth Day" id="validationServer5" value="{{$emp->birthday}}" required>
            <small style="color: red">
                @error('birthday')
                    {{$message}}
                @enderror
            </small>
        </div>
             <br>   
        <div>

            <input type="text" class="form-control" name="address" placeholder="address" id="validationServer6" value="{{$emp->address}}" required>
            <small style="color: red">
                @error('address')
                    {{$message}}
                @enderror
            </small>

        </div>
        <br>

       <div>
        <input type="text" class="form-control" name="national_number" placeholder="National number" value="{{$emp->national_number}}" required>
        <small style="color: red">
            @error('national_number')
                {{$message}}
            @enderror
        </small>
       </div>

        <br>
       <div>
        <input type="text" class="form-control" name="passport_number" placeholder="Passport Number"  value="{{$emp->passport_number}}" required>
        <small style="color: red">
            @error('passport_number')
                {{$message}}
            @enderror
        </small>
       </div>

       <br>
      
       <div>
       <select class="form-select" id="inputGroupSelect02" name="title" required>
         <option selected value="{{$emp->title}}">{{$emp->title}}</option>
         <option value="Mr">Mr</option>
         <option value="Ms">Ms</option>
         <option value="Dr">Dr</option>
         <option value="Esq">Esq</option>
       </select> 
        <small style="color: red">
            @error('title')
                {{$message}}
            @enderror
        </small>
       </div>


       <br>

       <div>
        <select class="form-select" id="inputGroupSelect03" name="health_status" required>
            <option selected value="{{$emp->health_status}}">{{$emp->health_status}}</option>
            <option value="decent">decent</option>
            <option value="handicapped">handicapped</option>
          </select>
        <small style="color: red">
            @error('health_status')
                {{$message}}
            @enderror
        </small>
       </div>
       <br>
       <div>
        <select class="form-select" id="inputGroupSelect04" name="socail_status" required>
            <option selected value="{{$emp->socail_status}}">{{$emp->socail_status}}</option>
            <option value="married">married</option>
            <option value="single">single</option>
            </select>
            <small style="color: red">
            @error('socail_status')
                {{$message}}
            @enderror
            </small>
       </div>
       <br>



       <div class="input-group mb-3">
        <button class="btn btn-outline-secondary" type="button" id="button-addon1">
            <a class=" btn btn-block"  href="{{route('department.create')}}">Add department</a>
        </button>
        <select class="form-select col-8" id="inputGroupSelect05" name="department_id" required>
            <option selected value="{{$emp->department_id}}">{{$emp->department->name}}</option>
            @foreach ($departments as $department)
            <option value= '{{$department->id}}'>{{$department->name}}</option>            
            @endforeach
          </select>
          <small style="color: red">
            @error('department_id')
                {{$message}}
            @enderror
            </small>
       </div>






      
       <div>
        <select class="form-select" id="inputGroupSelect05" name="sex" required>
            <option selected value="{{($emp->sex) ? 'm' : 'f'}}">{{ ($emp->sex) ? 'male' : 'female' }}</option>
            <option value= 'm'>male</option>
            <option value= 'f'>female</option>
          </select>
          <small style="color: red">
            @error('sex')
                {{$message}}
            @enderror
            </small>
       </div>
        <br>

















        
            {{-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ HERE --}}



            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
        
                <a class="btn btn-primary" href="{{ route('employee.index') }}">cancel</a>
            </div>
    </form>
 
    

</div>

@endsection
