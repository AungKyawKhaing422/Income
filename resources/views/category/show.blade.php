@extends('layout.master')
@section('title','All Categories')
@section('content')
    <div class="container">
        <h1 class="text-primary text-center my-3 mb-5">All Categories</h1>
        <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Parent</th>
                <th scope="col">Created_at</th>
                <th scope="col">Update_at</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    @if($category->parent ==0)
                        <td>yes</td>
                    @elseif($category->parent ==1)
                        <td>Income</td>
                    @elseif($category->parent ==2)
                        <td>Expense</td>
                    @endif
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->updated_at}}</td>
                    <td>
                        <button class="btn btn-warning btn-sm">
                            <a class="btn-link text-black" href="{{action('CategoryController@update',$category->id)}}">
                                <i class="fa fa-edit"></i>
                            </a>
                        </button>
                        <a class="btn-link text-white" href="{{action('CategoryController@destroy',$category->id)}}">
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection