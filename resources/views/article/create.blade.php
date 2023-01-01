@extends('layouts.app')
@section('title', 'Buat artikel baru')

@section('content')
<body class="container">
  <h1>Buat article baru</h1>
<form action="/article" method="post" enctype="multipart/form-data">
    @csrf
    <x-input field="title" type="text" label="Judul" placeholder="Inputkan judul" />  
    <x-textarea field="subject" placeholder="Masukan subject artikel" row="4" col="" label="Subject"/> 
    <x-inputfile />
    <x-button type="submit" class="btn btn-primary" text="Simpan"/> 
  </form>
</body>
@endsection