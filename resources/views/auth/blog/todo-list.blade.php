@extends('master')
@section('title', "ToDo list")
@section('content')

<div class="container mt-4">
    <div class="row">
      <div class="jumbotron col-sm-6 offset-sm-3 py-3">

        <h1 class="display-4 text-capitalize">Task list</h1>

        <div class="card bg-warning mt-3">
          <form id="form1">
            <div class="card-header">
              <label class="card-title" for="inp-add">New task</label>
              <input id="inp-add" type="text" class="form-control form-control-sm" placeholder="New task" value="100 sit-ups">
              <button id="btn-add" class="btn btn-primary btn-sm text-uppercase mt-2">add task</button>
            </div>
            <div class="card-body">
              <h3 class="cart-title">Tasks</h3>
              {{-- <label class="card-title" for="inp-filter">Filtering task</label>
              <input id="inp-filter" type="text" class="form-control form-control-sm mb-2" placeholder="Filter task" data-value="100"> --}}
              <ul class="list-group">
              </ul>
              <button id="btn-clear" class="btn btn-danger btn-sm text-uppercase mt-3">clear all tasks</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection