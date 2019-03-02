@extends('layout.master')

@section('title','Login')

@section('content')
    @include('layout.nav')
    <div class="container-fluid">
        <div class="col-md-6 offset-3">
            <h1 class="text-center my-5 text-primary">Login Here</h1>
            <form method="post" action="{{url('/login')}}">
                @include('layout.errors')
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="UserName">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                           placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
@endsection