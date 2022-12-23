@extends('layouts.app')
@section('title')
Article
@endsection

@section('content')
<body class="container">
@foreach($articles->chunk(3) as $articleChunk)
<div class="row">
  @foreach($articleChunk as $article)
  <div class="card col mb-2 ml-1 mr-1">
    <div class="card-body">
      <h1>{{ $article['title'] }}</h1>
      <p>{{ $article['subject'] }}</p>
      <a href="/article/{{$article['id']}}" class="btn btn-sm btn-info stretched-link">Baca</a>
    </div>
  </div>
  @endforeach
</div>
@endforeach

  <div>
    {{ $articles->links() }}
  </div>
</body>
@endsection