@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Task Page</div>
  <div class="card-body">
      
      <form action="#" method="post">
        {!! csrf_field() !!}
        <label>Task</label></br>
        <input type="text" name="Task" id="Task" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="Description" id="Description" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@stop