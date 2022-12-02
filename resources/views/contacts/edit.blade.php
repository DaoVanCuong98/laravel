@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Task Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact/') }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="" id="id" />
        <label>Task</label></br>
        <input type="text" name="name" id="name" value="" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="address" id="address" value="" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop