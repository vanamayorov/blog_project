@extends('master')
@section('title', 'Пост: ' . $post->title)
@section('content')
<div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Title -->
      <h1 class="mt-4">{{$post->title}}</h1>

      <hr>

      <!-- Date/Time -->
      <p>Posted on {{$post->created_at}}</p>

      <hr>

      <!-- Preview Image -->
      <img class="img-fluid rounded" src="{{Storage::url($post->image)}}" alt="">

      <hr>
      <!-- Post Content -->
      <p class="lead">{{$post->content}}</p>
      
      
      <!-- Single Comment -->
      <p>Комментарии:</p>
      <hr>
      @forelse($post->comments as $comment)
      <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="#" alt="">
        <div class="media-body">
          <h5 class="mt-0">{{$comment->user->name}}</h5>
          {{$comment->content}}
        </div>
        @admin
        <form action="{{route('delete', $comment->id)}}" method="POST">
          <button class="btn btn-danger btn-sm" type="submit">X</button>
          @csrf
        </form>
        @endadmin
      </div>
      @empty
      <h5 class="mt-0">No comments yet!</h5>
      @endforelse
      
      <!-- Comments Form -->
      @auth
      @active
      <div class="card my-4">
        <h5 class="card-header">Оставьте комментарий:</h5>
        <div class="card-body">
          <form method="POST" action="{{route('write-post', $post->id)}}">
            <div class="form-group">
              <input class="form-control" type="hidden" name="user_id" value="{{Auth::id()}}">
            </div>
            <div class="form-group">
              <input class="form-control" type="hidden" name="post_id" value="{{$post->id}}">
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="3" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
            @csrf
          </form>
        </div>
      </div>
      @else
      <div class="card my-4">
        <h5 class="card-body">Вы забанены и не можете оставить комментарий:(</h5>
      </div>
      @endactive
      @endauth
      @guest
      <div class="card my-4">
        <h5 class="card-body">Ввойдите в аккаунт, чтобы добавить комментарий:</h5>
      </div>
          
      @endguest
    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">


      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Категории</h5>
        <div class="card-body">
              <ul class="list-group list-group-flush text-center">
                @foreach($categories as $category)
                <li class="list-group-item">
                  <a href="{{route('category', $category->code)}}">{{$category->title}}</a>
                </li>
                @endforeach
              </ul>
        </div>
      </div>


    </div>

  </div>
  @endsection