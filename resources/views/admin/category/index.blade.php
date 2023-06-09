@extends('layouts.master')

@section('tittle','Category')
@section('content')

<div class="container-fluid px-4">
    
    <div class="card mt-4">
        <div class="card-header">
                <h4>View Category 
                    <a href="{{ 'admin/add-category' }}" class="btn btn-primary btn-sm float-end">Add Category</a>
                </h4>
        </div>

        <div class="card-body">
            @if (session('message'))
                 <div class="alert alert-success">{{ session('message') }}</div>
             @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->image }} 
                                <img src="{{ asset('uploads/category/' . $item->image) }}" width="50px" height="50px" alt="image">
                            </td>
                            <td>{{ $item->status == '1' ? 'Hidden':'Shown'}}</td>
                            <td>
                                <a href="" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>


    
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-items active">Category</li>
        </ol>    
            <div class="row">

            </div>
</div>



@endsection