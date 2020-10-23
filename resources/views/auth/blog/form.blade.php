@extends('layouts.app')
@section('title', isset($post) ? 'Редактировать пост: ' . $post->title : 'Написать пост' )
@section('content')
<div class="col-md-12">
    @isset($post)
    <h1>Редактировать Пост <b></b></h1>
    @else
    <h1>Добавить Новый пост</h1>
    @endisset
   <form method="POST" enctype="multipart/form-data" 
     @isset($post)
     action="{{route('post.update', $post)}}"
     @else
     action="{{route('post.store')}}"
     @endisset
     >
        <div>
         @csrf
         @isset($post)
         @method('PUT')
         @endisset
           <div class="input-group row">
              <label for="title" class="col-sm-2 col-form-label">Название: </label>
              <div class="col-sm-6">
               @error('title')
               <div class="alert alert-danger">{{$message}}</div>
               @enderror
                 <input type="text" class="form-control" name="title" id="title"
                    value="@isset($post){{$post->title}} @endisset">
              </div>
           </div>
           <br>
           <div class="input-group row">
              <label for="content" class="col-sm-2 col-form-label">Контент: </label>
              <div class="col-sm-6">
               @error('content')
               <div class="alert alert-danger">{{$message}}</div>
               @enderror
                 <textarea name="content" id="content" cols="72"
                    rows="7">@isset($post){{$post->content}} @endisset</textarea>
              </div>
           </div>
           <br>
           <div class="input-group row">
            <label for="category_id" class="col-sm-2 col-form-label">Категория: </label>
            <div class="col-sm-6">
             @error('category_id')
             <div class="alert alert-danger">{{$message}}</div>
             @enderror
             <select name="category_id" id="category_id" class="form-control pb-2">
                @foreach ($categories as $category)
                <option value="{{$category->id}}"
                 @isset($post)
                     @if($post->category_id == $category->id)
                     selected
                     @endif
                 @endisset
                 >{{$category->title}}</option>
                @endforeach 
              
             </select>
            </div>
         </div>
           <br>
         <div class="input-group row">
            <label for="desc" class="col-sm-2 col-form-label">Короткое описание: </label>
            <div class="col-sm-6">
             @error('desc')
             <div class="alert alert-danger">{{$message}}</div>
             @enderror
             <input type="text" class="form-control" name="desc" id="desc"
             value="@isset($post){{$post->desc}}@endisset">
            </div>
         </div>
           <br>
           <div class="input-group row">
              <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
              <div class="col-sm-10">
                 <label class="btn btn-default btn-file">
                 Загрузить <input type="file" style="display: none;" name="image" id="image">
                 </label>
              </div>
           </div>
           <button class="btn btn-success">Сохранить</button>
        </div>
     </form>
</div>
@endsection