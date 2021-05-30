@extends('layout.master')

@section('title')
    List Of All Resturants
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 py-2 pb-2 float-right"></div>
        <div class="col-md-3 d-block">
            <a href="add" class="btn btn-success btn-lg m-3 ">Add New Resturant</a>
        </div>
    </div>
</div>

        @if (session('msg'))
        
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{ session('msg') }} </strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>        
        
        @endif

        @if (session('dmsg'))
        <div class="col-md-6 col-offset-md-2">            
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> {{ session('dmsg') }} </strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif


        @if (session('update'))
        <div class="col-md-6 col-offset-md-2">            
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{ session('update') }} </strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif




    <div class="table-responsive pl-2 mt-5 ml-3">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col" colspan="2" class="text-center"> Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $d)                
                <tr>
                <th scope="row">{{ $d->id }}</th>
                <td>{{$d->name}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->address}}</td>
                <td><a href="delete/{{$d->id}}" class="btn btn-danger btn-sm"><i class="text-center">Delete</i></a></td>
                <td><a href='edit/{{$d->id}}' class="btn btn-success btn-sm"><i class="text-center">Edit</i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>                
    </div>

    <div class="col-md-4 col-offset-md-6">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                <a class="page-link" href="{{ $data->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                @foreach ($data->links() as $link)
                    <li class="page-item"><a class="page-link" href="#">{{$link}}</a></li>    
                @endforeach            
                <li class="page-item">
                <a class="page-link" href="{{ $data->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
        </nav>
    </div>

    
@endsection


