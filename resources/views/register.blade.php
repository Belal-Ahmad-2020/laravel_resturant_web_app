@extends('layout.master')

@section('title')
    Registeration Form
@endsection

@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-8 col-sm-12 py-3 mt-5 ">
        <h2 class="h2 mb-3 text-center pb-3">Create New Account</h2>

        @if (session('msg'))        
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{ session('msg') }} </strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>        
        @endif

        <form method="post" action="{{ url('register') }}" autocomplete="off">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" placeholer="Your Name" id="name" name="name" aria-describedby="nameHelp">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholer="Your Eamil"> 
            </div>
            <div class="form-group">
                <label for="address">Password</label>
                <input type="password"  name="password" class="form-control" id="address" placeholer="Your Password">
            </div>
            <!-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-success btn-block">Create Account</button>
        </form>

        
        <p class="h4 text-info text-center py-5 ">
            Already have an acount? <a href="/login" class="text-secondary">Login</a>
        </p>
       
    </div>
    
</div>

@endsection
