@extends('layouts.app')

@section('content')
    <div style="margin: 5%" class="container">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Employee Info</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('employee.index') }}">Back</a>
                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>First Name:</strong>
                            {{ $emp->first_name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Middle Name:</strong>
                            {{ $emp->middle_name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $emp->last_name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Mother Name:</strong>
                            {{ $emp->mother_name }}
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Birth place:</strong>
                            {{ $emp->birth_place }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>birthday:</strong>
                            {{ $emp->birthday }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Sex:</strong>
                            {{ $emp->sex }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>title:</strong>
                            {{ $emp->title }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>passport_number:</strong>
                            {{ $emp->passport_number }}
                        </div>
                    </div>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>address:</strong>
                            {{ $emp->address }}
                        </div>
                    </div>
        
        
        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>landline</strong>
                            {{ $emp->landline }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>phone</strong>
                            {{ $emp->phone }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>department Name</strong>
                            {{ $emp->department_id }}
                        </div>
                    </div>
        
        
        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Health Status</strong>
                            {{ $emp->health_status }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>socail status</strong>
                            {{ $emp->socail_status }}
                        </div>
                    </div>
        
        
        
        
                </div>

            </div>
        </div>

       
    </div>
@endsection
