@extends('layouts.base')


@section('title')
    NetBook | Create
@endsection


@section('main')
<div class="container">
    <br>
       <div class="card">
           <div class="card-header"><h3>Update Note</h3></div>
           <div class="card-body">

            <form action="{{ route('update', $articles[0]->id)}}" method="POST">
                @csrf
                @method('PUT')

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    
           

            <div class="mb-3">
                <label  class="form-label">Article</label>
                <input type="text" name="article" value="{{ $articles[0]->article }}" class="form-control" placeholder="Article should be unique.." required>
            </div>

            <div class="mb-3">
                <label  class="form-label">Source</label>
                <input type="text" name="source" value="{{ $articles[0]->source }}"  class="form-control" placeholder="Source Link" required>
            </div>

            <div class="mb-3">
                <label  class="form-label">Textarea</label>
                <textarea name="description"  class="form-control" cols="20" rows="5">{{ $articles[0]->description }}</textarea>
            </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
           </div>
       </div>
</div>
@endsection