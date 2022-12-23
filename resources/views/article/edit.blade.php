@extends('layouts.app')
@section('title')
Edit {{$article['title']}}
@endsection

@section('content')
<body class="container">
  <h1>Edit {{$article['title']}}</h1>
<form action="/article/{{$article->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Judul</label>
      <input type="text" class="form-control" id="title" name="title" value="{{old('title') ? old('title') : $article->title}}">
      @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="subject">Subject</label>
      <textarea name="subject" id="subject" rows="3" class="form-control" >{{old('subject') ? old('subject') : $article->subject}}</textarea>
      @error('subject')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</body>
@endsection