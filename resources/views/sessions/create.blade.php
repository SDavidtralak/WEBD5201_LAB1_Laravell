@extends('layouts.layout')


@section('content')

<div class="col-md-8">
    <h1>Sign In</h1>
</div>


<form method="POST" action="/login">
    {{csrf_field()}}


    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" id="password" name="password" required>
    </div>


    <div class="form-group">
        <button type="submit">login</button>
    </div>

    <div class="form-group">
        @include('layouts.errors')
    </div>

</form>

@endsection
