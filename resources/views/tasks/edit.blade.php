@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Task :</h1>
 
        <form method="post" action="{{ route('tasks.update', $task->id) }}">
           
            @csrf
            <div class="form-group">

                <label for="first_name">Name:</label>
                <input type="text" class="form-control" name="name" value={{ $task->name }} />
            </div>

            <button type="submit" class="btn">Update</button>
        </form>
    </div>
</div>
@endsection