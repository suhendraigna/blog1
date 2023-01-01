@extends('layouts.app')
@section('title')
Edit {{$article['title']}}
@endsection

@section('content')
<body class="container">
  <h1>Edit {{$article['title']}}</h1>
  <form action="/article/{{$article->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <x-input field="title" type="text" label="Judul" placeholder="Inputkan judul" value="{{$article->title}}" />
    <x-textarea field="subject" placeholder="Masukan subject artikel" row="4" col="" label="Subject" value="{{$article->subject}}"/> 
    <img src="/thumbnail/{{$article->thumbnail}}" alt="Article Thumbnail" width="150">
    <x-inputfile />
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</body>
@endsection