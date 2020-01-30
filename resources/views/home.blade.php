@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-md-12">
            <div class="row">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <a href="{{'book/create'}}" type="button" class="btn btn-primary btn-lg float-right mb-1">Create</a>
                        <table class="table table-sm table-dark">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Book</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tbody>
                                <tr>
                                    @foreach($users as $user)

                                    <th>{{$user->id}}</th>
                                    <th>{{$user->name}}</th>
                                    <th>{{$user->email}}</th>
                                    <th></th>
                                    <th>
                                        @endforeach
                                        <a class="btn btn-primary btn-md" href="">View &nbsp</a>

                                        <span class="btn btn-danger btn-md btn-delete" style="cursor: pointer" onclick="return confirm('Are you sure?') ? document.getElementById('form-delete-book-').submit() :''; " >Delete &nbsp</span>
                                        <form style="display: none" id="" action="" method="post">
                                            @csrf

                                            <button class="btn btn-danger btn-md"  onclick="return confirm('Are you sure?')" type="submit">Delete</button>
                                        </form>
                                        <a class="btn btn-warning btn-md" href="">&nbsp&nbspEdit&nbsp&nbsp&nbsp</a>
                                    </th>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

@endsection
