@extends('layouts.app')
@section('title')
Article
@endsection

@section('content')
<body class="container">
  <h1>Ini adalah halaman konten {{ $article->title }}</h1>
  <p>{{$article->subject}}</p>

  <a href="/article" class="btn btn-sm btn-info">Kembali</a>
  <a href="/article/{{$article['id']}}/edit" class="btn btn-sm btn-warning">Edit</a>

  <form action="/article/{{$article['id']}}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-sm btn-danger">Hapus</button>
  </form>
</body>
@endsection