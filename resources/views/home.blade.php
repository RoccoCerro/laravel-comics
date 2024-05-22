@extends('layouts.app')

@section('title', 'Homepage')

@section('main')
  <div class="container">
    <h1>Homepage</h1>
  <?php
    @var_dump($comics);
  ?>
  </div>

@endsection
