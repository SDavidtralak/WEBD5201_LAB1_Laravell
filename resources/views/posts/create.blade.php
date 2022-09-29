@extends('layouts.layout')
@section('content')

<h1>Create a Post</h1>

<form method="POST" action="/post">

    {{ csrf_field()}}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" >
    </div>

    <div class="form-group">
      <label for="body">Body</label>
     <textarea name="body" id="body" class="form-control" ></textarea>
    </div>



    <button type="submit" class="btn btn-primary">Publish</button>

  </form>

  @include('layouts.errors')

@endsection
