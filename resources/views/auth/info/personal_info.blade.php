@extends('layouts.app')
@section('title', "Информация обо мне")
@section('content')
<div class="col-md-12">
    <p class="text-center font-weight-bold">Welcome , {{$user->name}}</p>
    <table class="text-center m-auto table">
        <tbody>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Email
                </th>
                <th>
                    Your status
                </th>
            </tr>
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                @if($user->status())
                    <td class="text-success">{{$user->status}}</td>
                @else
                    <td class="text-danger">{{$user->status}}</td>
                @endif
                
            </tr>
        </tbody>
    </table>   
</div>
@endsection