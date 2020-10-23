@extends('layouts.app')
@section('title', "Пост: " . $post->title)
@section('content')
<div class="panel">
                <h1>Название статьи: <b>{{$post->title}}</b></h1>
                <p>Дата написания: {{$post->created_at}}<b></b></p>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Категория</th>
                        <th>Изображение</th>
                        <th>Короткое описание</th>
                        <th>Контент</th>
                        <th>Ссылка</th>
                        <th>К-ство комментариев</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$post->category->title}}</td>
                            <td>
                                <a href="#">
                                    <img src=""  height="56px">
                                </a>
                            </td>
                            <td>{{$post->desc}}</td>
                            <td>{{$post->content}}</td>
                            <td><a href="{{route('blogPost', $post)}}">Click</a></td>
                            <td>{{$post->comments->count()}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
</div>
@endsection