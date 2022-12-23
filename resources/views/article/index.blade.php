@extends('layouts.app')
@section('title')
Article
@endsection

@section('content')
<body class="container">
@foreach($articles as $article)
<div class="card mb-2">
  <div class="card-body">
    <h1>{{ $article['title'] }}</h1>
    <p>{{ $article['subject'] }}</p>
    <a href="/article/{{$article['id']}}" class="btn btn-sm btn-info">Baca</a>
    <a href="/article/{{$article['id']}}/edit" class="btn btn-sm btn-warning">Edit</a>

    <form action="/article/{{$article['id']}}" method="post">
      @csrf
      @method('DELETE')
      <button class="btn btn-sm btn-danger">Hapus</button>
    </form>
  </div>
</div>
@endforeach

  <div>
    {{ $articles->links() }}
  </div>
</body>
@endsection