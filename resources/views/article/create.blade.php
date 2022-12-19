@extends('layouts.app')
@section('title')
Create an Article
@endsection

@section('content')
<body class="container">
  <h1>Buat article baru</h1>
<form action="/article" method="post">
    @csrf
    <div class="form-group">
      <label for="title">Judul</label>
      <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
      @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="subject">Subject</label>
      <textarea name="subject" id="subject" rows="3" class="form-control" >{{old('subject')}}</textarea>
      @error('subject')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>
@endsection