@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">Uredite POST</div>

        <div class="card-body">

            <form method="POST" action="{{ route('posts.update', $post->id) }}">

                @csrf
                @method('PATCH')

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title }}" autofocus>
                        
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Body') }}</label>

                    <div class="col-md-6">
                        <textarea id="body" type="body" class="form-control @error('body') is-invalid @enderror" name="body" value="" rows="6">{{ $post->body }}</textarea>

                        @error('body')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-primary">Natrag</a>
                        <button type="submit" class="btn btn-success float-right">Uredi</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection