@extends('layouts.app')

@section('title', 'Homepage')

@section('main')

  <div class="container">
    <div class="row">
      @foreach($comics as $comic)

        <div class="col-2">
          <div class="card h-100">
            <img src="{{ $comic["thumb"] }}" alt="">
            <div class="card-body">
              <p class="card-text">
                {{ $comic["title"] }}
              </p>
            </div>
          </div>
        </div>

      @endforeach
    </div>
  </div>

@endsection
