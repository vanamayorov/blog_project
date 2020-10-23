@extends('master')
@section('title', isset($category) ? "Category: " . $category->title : 'Блог')
@section('csrf')
<meta name="csrf-token" content="{{ csrf_token() }}">   
@endsection
@section('content')
<div class="row">
  
  <!-- Blog Entries Column -->
  <div class="col-md-8">
    <h1 class="my-4">Недавние посты</h1>

    <div class="display">

      <!-- Blog Post -->
      @if(isset($category))
      @forelse ($category->posts as $post)
        @include('post_card')
      @empty
      <div class="card my-4">
        <h5 class="card-body">В этой категории еще нет постов</h5>
      </div>
      @endforelse
      @else 
      @foreach ($posts as $post)
        @include('post_card')
      @endforeach

      @endif
    </div>


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
        <h5 class="card-header">Поиск</h5>
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="form-control" id="search" placeholder="Search for..." onkeyup="findPost()">
            @csrf
          </div>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Категории</h5>
        <div class="card-body">
          <ul class="list-group list-group-flush text-center">
            @foreach ($categories as $category)
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

  @section('script')
  <script>

    function findPost(){
      const CSRF_TOKEN =  $('meta[name="csrf-token"]').attr('content');
      const value = $('#search').val();
    $.ajax({
      url: "/findPost",
      type: 'GET',
      data: {
        _token: CSRF_TOKEN,
        value: value,
      },
      success: function(data){
        console.log(data);
        $('.display').html(data);
       
      }

    });
    }
    
  </script>   
  @endsection