@extends('layouts.app')
@section('title', 'Daftar article')

@section('content')
<body class="container">
@foreach($articles->chunk(3) as $articleChunk)
<div class="row">
  @foreach($articleChunk as $article)
  <div class="card col mb-2 ml-1 mr-1">
    <img class="card-img-top" src="/thumbnail/{{$article->thumbnail}}" alt="Thumbnail">
    <div class="card-body">
      <h1>{{ ucfirst($article['title']) }}</h1>
      <p>{{ $article['subject'] }}</p>
      <a href="/article/{{$article['slug']}}" class="btn btn-sm btn-info stretched-link">Baca</a>
    </div>
  </div>
  @endforeach
</div>
@endforeach

  <div>
    {{ $articles->links() }}
  </div>
</body>

@include('layouts.footer')
@endsection