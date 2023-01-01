@extends('layouts.app')
@section('title')
Article
@endsection

@section('content')
<body class="container">
  <h1>{{ ucfirst($article->title) }}</h1>
  <img src="/thumbnail/{{$article->thumbnail}}" alt="Article Thumbnail" width="250">
  <p>{{$article->subject}}</p>

  <a href="/article" class="btn btn-sm btn-info">Kembali</a>
  <a href="/article/{{$article['id']}}/edit" class="btn btn-sm btn-warning">Edit</a>

  <form action="/article/{{$article['id']}}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-sm btn-danger">Hapus</button>
  </form>
</body>

@include('layouts.footer')
@endsection