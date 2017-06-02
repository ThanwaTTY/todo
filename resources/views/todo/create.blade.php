@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create</h1>

        <form method="POST" action="/todo">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
          </div>
          <div class="form-group">
            <label for="url">Url</label>
            <input type="text" class="form-control" name="url" id="url" placeholder="http://www.example.com">
          </div>      
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Descrpition">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


@endsection
