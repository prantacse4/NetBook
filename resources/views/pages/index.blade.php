@extends('layouts.base')

@section('title')
    NetBook | Home
@endsection


@section('main')


    <div class="container">

      @if (session()->has('message'))
      <div class="alert alert-success">{{session()->get('message')}}</div>
      @endif

        @foreach ($articles as $article)
        <div class="card m-4">
            <div class="card-body">
              <h5 class="card-title">{{ $article->article }}</h5>
              <a href="{{ $article->source }}" class="card-subtitle mb-2 text-muted">{{ $article->source }}</a>
              <p class="card-text">{{ $article->description }}</p>
              <a href="{{ route('updatenote', $article->id) }}" class="btn btn-info">Update</a>
              <form action="{{ route('delete', $article->id) }}" method="POST" class="d-inline">
                @csrf
                @method('delete')
                <button class="btn btn-danger">Delete</button>
              </form>
            </div>
          </div>

        @endforeach





    </div>


@endsection