@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <h1>Ведение блога</h1>
    <table class="table">
        <tbody>
        <tr>
            <th>
                #
            </th>
            <th>
                Название статьи
            </th>
            <th>
                Время написания статьи
            </th>
            <th>
                Действия
            </th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->created_at->format('H:i d/m/Y')}}</td>
            <td>    
                <form  action="{{route('post.destroy', $post)}}" method="POST">
                    <a class="btn btn-success" type="button" href="{{route('post.show', $post)}}">Открыть</a>
                    <a class="btn btn-warning" type="button" href="{{route('post.edit', $post)}}">Редактировать</a>
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" type="button">Удалить</button>
                    @csrf
                </form>
            </td>
        </tr>
            
        @endforeach
            
      
        </tbody>
    </table>
    <a class="btn btn-success" type="button" href="{{route('post.create')}}">Написать статью</a>
</div>
@endsection