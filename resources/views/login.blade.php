@extends('layout.master')

@section('title')
    Login Form
@endsection

@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-8 col-sm-12 py-3 mt-5 ">
        <h2 class="h2 mb-3 text-center pb-3">Sign_in</h2>

        @if (session('msg'))        
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{ session('msg') }} </strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>        
        @endif

        <form method="post" action="{{ url('login') }}" autocomplete="off">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholer="Your Eamil"> 
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password"  name="password" class="form-control" id="password" placeholer="Your Password">
            </div>
            <!-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-success btn-block">Login</button>
        </form>

        
        <p class="h4 text-info text-center py-5 ">
            Does'nt have an acount? <a href="/register" class="text-secondary">Register</a>
        </p>
       
    </div>
    
</div>

@endsection
