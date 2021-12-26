@extends('layouts.base')

@section('title')
    NetBook | Home
@endsection


@section('main')


    <div class="container">

        @foreach ($articles as $article)
            
        <div class="card m-4">
            <div class="card-body">
              <h5 class="card-title">{{ $article->article }}</h5>
              <a href="{{ $article->source }}" class="card-subtitle mb-2 text-muted">{{ $article->source }}</a>
              <p class="card-text">{{ $article->description }}</p>
              <a href="#" class="btn btn-info">Update</a>
              <a href="#" class="btn btn-danger">Delete</a>
            </div>
          </div>

        @endforeach





    </div>


@endsection