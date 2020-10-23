@extends('layouts.app')
@section('title', "Категория " . $category->title)
@section('content')
<h1>Категория {{ $category->title }}</h1>
    <table class="table">
        <tbody>
        <tr>
            <th>
                Поле
            </th>
            <th>
                Значение
            </th>
        </tr>
        <tr>
            <td>ID</td>
            <td>{{ $category->id }}</td>
        </tr>
        <tr>
            <td>Название</td>
            <td>{{ $category->title }}</td>
        </tr>
        <tr>
            <td>Код</td>
            <td>{{ $category->code }}</td>
        </tr>
        <tr>
            <td>Картинка</td>
            <td><img src="{{Storage::url($category->image)}}"
                     height="240px"></td>
        </tr>
        </tbody>
    </table>
</div>
@endsection