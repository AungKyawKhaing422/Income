@extends('layout.master')
@section('title','Edit')
@section('content')
    @include('layout.nav')
    <div class="container-fluid">
        <div class="col-md-6 offset-3">
            <form method="post" action="{{action('CategoryController@edit',$category->id)}}">
                @include('layout.errors')
                {{csrf_field()}}
                <h1 class="text-center text-dark my-5">Category Edition</h1>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Category Name</label>
                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                           value="{{$category->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category Type</label>
                    <select class="form-control" name="parent" id="exampleFormControlSelect1">
                        @foreach($categories as $category)
                            @if($category->parent ==0)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                        @endforeach
                        <option value=0>other</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary float-right">Edit</button>
            </form>
        </div>
    </div>
@endsection