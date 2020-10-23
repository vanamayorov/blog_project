@extends('layouts.app')
@section('title', "Все пользователи")
@section('content')
<div class="col-md-12">
    <h1>Все пользователи</h1>
    <table class="table">
        <tbody>
        <tr>
            <th>
                #
            </th>
            <th>
                Имя пользователя
            </th>
            <th>
                Email
            </th>
            <th>
                Статус
            </th>
            <th>
                Действия
            </th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            @if($user->status())
                <td class="text-success">{{$user->status}}</td>
                @else
                <td class="text-danger">{{$user->status}}</td>
            @endif
            <td>    
                <!-- Button trigger modal -->
                <form method="POST" action="{{route('users.update', $user)}}">
                    <input type="hidden" name="id" value="{{$user->id}}">
                        <select name="status">
                        @foreach(['active', 'banned'] as $status)
                        <option value="{{$status}}"
                            @if($user->status === "$status")
                            selected
                            @endif
                            >@php echo ucfirst($status) @endphp</option>
                        @endforeach
                        </select>
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary ml-3">Изменить</button>
                </form>
            </td>
        </tr>
            
        @endforeach
            
      
        </tbody>
    </table>
    {{-- <a class="btn btn-success" type="button" href="{{route('categories.create')}}">Создать категорию</a> --}}
</div>
@endsection