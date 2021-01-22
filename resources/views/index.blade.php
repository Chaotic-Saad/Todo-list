@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Tasks</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>


        @foreach($tasks as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->name}}</td>
            <td>
                <a href="{{ route('tasks.edit',$task->id)}}">Edit</a>
            </td>
            <td>
                  <a href="{{ route('tasks.destroy',$task->id)}}">Delete</a>
            </td>
        </tr>


        @endforeach
    </tbody>
  </table>

@endsection