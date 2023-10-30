@extends('layouts.app')

@section('content')


<form action="{{route('employee.store')}}" method="POST">
    @csrf
    


</form>




@endsection