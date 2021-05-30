@extends('layout.master')

@section('title')
    Add New Resturant
@endsection

@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 col-sm-12 py-3 mt-5 ">
        <h2 class="h2 mb-3 text-center pb-3">Add New Resturant</h2>
        <form method="post" action="{{ url('addResturant') }}" autocomplete="off">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" placeholer="Your Name" id="name" name="name" aria-describedby="nameHelp">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="emial" name="email" class="form-control" id="email" placeholer="Your Eamil"> 
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text"  name="address" class="form-control" id="address" placeholer="Your Password">
            </div>
            <!-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-primary btn-block">Add New Resturant</button>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>

@endsection
