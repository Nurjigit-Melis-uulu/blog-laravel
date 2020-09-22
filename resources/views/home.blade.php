@extends('layouts.app')

@section('title')Welcome!@endsection

@section('content')
  <h1>Home</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit labore quisquam facere quod quo perspiciatis ut ipsa! Ipsa, minus. Exercitationem odit enim ducimus provident et nemo aspernatur assumenda inventore ea.</p>
@endsection

@section('aside')
  @parent
    <p>home text</p>
@endsection