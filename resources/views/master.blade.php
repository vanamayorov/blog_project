<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('csrf')
    <title>@yield('title')</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
      <!-- Custom styles for this template -->
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="/css/blog.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <header class="blog-header py-3">
          <div class="row">
          </div>
        <div class="row">
          <div class="ml-auto">
            @auth
            @admin
                <a class="btn btn-sm btn-outline-secondary" href="{{route('home')}}">Админ панель</a>
                @else
                <a class="btn btn-sm btn-outline-secondary" href="{{route('person.info.index')}}">Личная информация</a>

            @endadmin  
            <a class="btn btn-sm btn-outline-secondary" href="{{route('get-logout')}}">Выйти</a>
            @endauth
            @guest
            <a class="btn btn-sm btn-outline-secondary" href="{{route('login')}}">Войти</a>
            <a class="btn btn-sm btn-outline-secondary" href="{{route('register')}}">Зарегистрироваться</a>
            @endguest
          </div> 

        </div>
          <div class="row flex-nowrap justify-content-center align-items-center">
          
          <div class="text-center m-auto">
            <a class="blog-header-logo text-dark" href="{{route('index')}}">Личный блог</a>
          </div>
          
        </div>
      </header>
    
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-around">
          <a class="p-2 text-muted" href="{{route('index')}}">Главная</a>
          <a class="p-2 text-muted" href="{{route('blog')}}">Блог</a>
          <a class="p-2 text-muted" href="{{route('portfolio')}}">Портфолио</a>
          @auth
          @admin
            <a class="p-2 text-muted" href="{{route('toDo')}}">Список задач</a>
            
          @endadmin   
          @endauth
        </nav>
      </div>
      @yield('content')
    </div>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/todo.js"></script>
    @yield('script')
  </body>
</html>