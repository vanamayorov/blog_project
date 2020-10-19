@extends('master')
@section('content')
<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

      <h1 class="my-4">Recent posts</h1>

      <!-- Blog Post -->
      @if(isset($category))
      @foreach ($category->posts as $post)
      <form action="{{route('blogPost', $post)}}" method="GET">
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$post->title}}</h2>
            <p class="card-text">{{$post->content}}</p>
            <button type="submit" class="btn btn-primary">Read More &rarr;</button>
          </div>
          <div class="card-footer text-muted">
            Posted on {{$post->created_at}}
          </div>
        </div>
        @csrf
      </form>
      @endforeach
      @else 
      @foreach ($posts as $post)
      <form action="{{route('blogPost', $post)}}" method="GET">
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$post->title}}</h2>
            <p class="card-text">{{$post->content}}</p>
            <button type="submit" class="btn btn-primary">Read More &rarr;</button>
          </div>
          <div class="card-footer text-muted">
            Posted on {{$post->created_at}}
          </div>
        </div>
        @csrf
      </form>
      
      @endforeach

      @endif


      <!-- Pagination -->
      @if(!isset($category)) 
      <div class="pagination justify-content-center mb-4">
       {{ $posts->links() }}
     </div> 
      @endisset 

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="form-control" id="search" placeholder="Search for...">
            <span class="input-group-append">
              <button class="btn btn-secondary" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
          <div class="row">
            @if($categories->count() > 3)
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                @foreach ($categories as $category)
                <li>
                  <a href="{{route('category', $category->code)}}">{{$category->title}}</a>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                @foreach ($categories as $category)
                <li>
                  <a href="{{route('category', $category->code)}}">{{$category->title}}</a>
                </li>
                @endforeach
              </ul>
            </div>
            @else 
            <div class="col-12">
              <ul class="list-unstyled mb-0">
                @foreach ($categories as $category)
                <li>
                  <a href="{{route('category', $category->code)}}">{{$category->title}}</a>
                </li>
                @endforeach
              </ul>
            </div>
            @endif
            
          </div>
        </div>
      </div>

      <!-- Side Widget -->
      <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
          You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
      </div>

    </div>

  </div>
  @endsection