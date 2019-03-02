@extends('layout.master')
@section('title','All Categories')
@section('content')
    @include('layout.nav')
    <div class="container">
        <div class="row justify-content-between no-gutters mt-5 mb-1">
            <div class="m-0">
                <a href="{{url('/category/create')}}" class="btn btn-primary">Create <i class="fa fa-plus"></i></a>
            </div>
            <h2 class="text-primary">All Categories</h2>
        </div>
        @include('layout.errors')
        <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Parent</th>
                <th scope="col">Created_at</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 0 ?>
            @foreach($categories as $category)
                <tr class="text-muted">
                    <th scope="row">{{++$i}}</th>
                    @if($category->parent ==0)
                        <td class="text-success">{{$category->name}}</td>
                    @else
                        <td class="text-info">{{$category->name}}</td>
                    @endif
                    @if($category->coca !=null)
                        <td>{{$category->coca->name}}</td>
                    @else
                        <td>yes</td>
                    @endif
                    <td>{{$category->created_at->toFormattedDateString()}}</td>
                    <td>
                        <a class="btn btn-warning btn-sm text-black"
                           href="{{action('CategoryController@update',$category->id)}}">
                            <i class="fa fa-edit"></i>
                        </a>
                        @if($category->deleted_at !=null)
                            <a class="btn btn-dark btn-sm text-white"
                               href="{{action('CategoryController@destroy',$category->id)}}">
                                <i class="fa fa-trash"></i>
                            </a>
                        @else
                            <a class="btn btn-danger btn-sm text-white"
                               href="{{action('CategoryController@destroy',$category->id)}}">
                                <i class="fa fa-trash"></i>
                            </a>
                        @endif
                        @if($category->parent==0)
                            <a class="btn btn-primary btn-sm text-black"
                               href="{{url('/category/create/'.$category->id)}}">
                                create child
                            </a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row justify-content-center">
            {{$categories->links()}}
        </div>
    </div>
@endsection