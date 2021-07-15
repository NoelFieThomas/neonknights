@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Change Password Success') }}</div>

                <div class="card-body">

                    <div class="form-group row mb-0">
                        <div class="col-md-12 offset-md-0">

                            <div class="alert alert-success" role="alert">
                            Change Password Successfully.       
                                
                            </div>
                            <a type="submit" class="btn btn-primary" href="/">                
                                {{ __('Return to Home') }}
                                </a>
                        </div>    
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection