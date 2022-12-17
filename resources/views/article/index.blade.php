@extends('layouts.app')
@section('title')
Article
@endsection

@section('content')
@foreach($articles as $article)
  <h1>{{ $article['title'] }}</h1>
  <p>{{ $article['subject'] }}</p>
@endforeach

  <div>
    {{ $articles->links() }}
  </div>
@endsection