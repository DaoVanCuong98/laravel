@extends('contacts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <p class="card-text">Task : {{ $contacts->Task }}</p>
        <p class="card-text">Desciption : {{ $contacts->Desciption }}</p>
  </div>
       
    </hr>
  
  </div>
</div>