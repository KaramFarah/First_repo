@extends('layouts.app')

@section('content')
<div class="container" style="margin: 5%">
    

    <form action="{{route('department.store')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text">Department Name</span>
            <input type="text" aria-label="name" class="form-control" name="name" placeholder="Department Name">
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
