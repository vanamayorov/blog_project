@extends('layouts.app')
@section('title', isset($category) ? 'Редактировать категорию ' . $category->title : 'Создать категорию')
@section('content')
<div class="col-md-12">
    @isset($category)
    <h1>Редактировать Категорию <b>{{$category->title}}</b> </h1>
    @else
    <h1>Добавить Категорию</h1>
    @endisset
     
     <form method="POST" enctype="multipart/form-data" 
     @isset($category)
     action="{{route('categories.update', $category)}}"
     @else
     action="{{route('categories.store')}}"
     @endisset
     >
        <div>
          @isset($category)
          @method('PUT')
          @endisset
         @csrf
           <div class="input-group row">
              <label for="code" class="col-sm-2 col-form-label">Код: </label>
              <div class="col-sm-6">
                 @error('code')
                     <div class="alert alert-danger">{{$message}}</div>
                 @enderror
                 <input type="text" class="form-control" name="code" id="code"
                    value="{{old('code', isset($category) ? $category->code : null )}}">
              </div>
           </div>
           <br>
           <div class="input-group row">
              <label for="name" class="col-sm-2 col-form-label">Название: </label>
              <div class="col-sm-6">
               @error('title')
               <div class="alert alert-danger">{{$message}}</div>
               @enderror
                 <input type="text" class="form-control" name="title" id="title"
                    value="@isset($category){{$category->title}}@endisset">
              </div>
           </div>
           <br>
           <br>
           <button class="btn btn-success">Сохранить</button>
        </div>
     </form>
  </div>
@endsection