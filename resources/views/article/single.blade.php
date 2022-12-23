@extends('layouts.app')
@section('title')
Article
@endsection

@section('content')
<body class="container">
  <h1>Ini adalah halaman konten {{ $article->title }}</h1>
  <p>{{$article->subject}}</p>

  <a href="/article" class="btn btn-sm btn-info">Kembali</a>
</body>
@endsection