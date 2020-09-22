@extends('layouts.app')

@section('title')contact us @endsection

@section('content')
  <h1>Contact</h1>

  <form action="{{ route('contact-form') }}" method="post">
    @csrf

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" placeholder="inter name" id="name" class="form-control"> 
    </div>
    
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" name="email" placeholder="inter email" id="email" class="form-control"> 
    </div>

    <div class="form-group">
      <label for="subject">Message title</label>
      <input type="text" name="subject" placeholder="inter subject" class="form-control" id="subject"> 
    </div>

    <div class="form-group">
      <label for="message">Message</label>
      <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="inter message"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
  </form>
@endsection