@extends('layouts.app')

@section('title', 'Homepage')

@section('main')
  <div class="container">
    <h1>Homepage</h1>
  </div>

  <?php
    @var_dump($comics[1]=>"title")
  ?>
@endsection
