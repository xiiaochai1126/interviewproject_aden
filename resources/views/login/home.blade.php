@extends('layout')
@section('content')
  
    <div class="card">
        <div class="card-header">Contact Form</div>
        <div class="card-body"> 
        @foreach ($catImages as $catImage)
                <img src="{{ $catImage['url'] }}" alt="Cat Image">
        @endforeach
        </div>
    </div>

@stop