@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-md-12">
            <div class="row">

                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Book name</label>
                        <input name="BookName"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Book name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>


@endsection
