@extends('layouts.app')
@section('title', "Все категории")
@section('content')
<div class="col-md-12">
    <h1>Все категории</h1>
    <table class="table">
        <tbody>
        <tr>
            <th>
                #
            </th>
            <th>
                Название категории
            </th>
            <th>
                Действия
            </th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->title}}</td>
            <td>    
                <form  action="{{route('categories.destroy', $category)}}" method="POST">
                    <a class="btn btn-success" type="button" href="{{route('categories.show', $category)}}">Открыть</a>
                    <a class="btn btn-warning" type="button" href="{{route('categories.edit', $category)}}">Редактировать</a>
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" type="button">Удалить</button>
                    @csrf
                </form>
            </td>
        </tr>
            
        @endforeach
            
      
        </tbody>
    </table>
    <a class="btn btn-success" type="button" href="{{route('categories.create')}}">Создать категорию</a>
</div>
@endsection