@extends('layouts.app')
@section('title')
Create an Article
@endsection

@section('content')
<body class="container">
  <h1>Buat article baru</h1>
<form action="/article" method="post">
    @csrf
    <x-input field="title" type="text" label="Judul"/> 
    <x-textarea field="subject" row="4" col="" label="Subject"/> 
    <x-button type="submit" class="btn btn-primary" text="Simpan"/> 
  </form>
</body>
@endsection