@extends('base')
@section('main')

<div class="row">
 <div >
    <h1>Add a Task</h1>

  <div>
      <form method="post" action="{{ route('tasks.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Task:</label>
              <input type="text" class="form-control" name="name"/>
              <button type="submit" >Add Task</button>
          </div>
      </form>
  </div>
@endsection