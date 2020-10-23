@extends('master')
@section('title', 'Главная страница')
@section('content')
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark text-center">
    <div class="col-12 px-0 ">
      <h1 class="display-4 font-italic">Welcome to Vanya Mayorov's personal page!</h1>
      <p class="lead my-3">I hope you will find out more about me:)</p>
    </div>
  </div>
  <div class="row mb-2">
    @foreach ($posts as $post)
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4  d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">{{$post->category->title}}</strong>
          <h5 class="mb-0">{{$post->title}}</h5>
          <p class="card-text my-2"><span class="badge badge-primary">{{$post->desc}}</span></p>
          <a href="{{route('blogPost', $post)}}" class="stretched-link mt-auto">Продолжить чтение</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img width="250" height="250" src="{{Storage::url($post->image)}}" alt="">
        </div>
      </div>
    </div>
    @endforeach
  </div>
@endsection