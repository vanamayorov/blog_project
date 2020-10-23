@extends('master')
@section('title', 'Портфолио')
@section('content')
    <div class="text-center">
      <div class="jumbotron">
        <a class="btn  btn-outline-primary btn-lg" href="https://github.com/vanamayorov" target="_blank" role="button">Check out my Github:</a>
      </div>
    </div>
    <h3 class="text-center">Несколько готовых проектов:</h3>
    <div class="row justify-content-between no-wrap pt-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
              <h5 class="card-title">Covid tracker</h5>
              <p class="card-text">Built on React</p>
              <a href="https://vanamayorov.github.io/covid/" class="btn btn-primary" target="_blank">Visit site</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
              <h5 class="card-title">Films cards</h5>
              <p class="card-text">Built on React</p>
              <a href="https://vanamayorov.github.io/new_react_project/" class="btn btn-primary align-items-center" target="_blank">Visit site</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
              <h5 class="card-title">Cuba landing</h5>
              <p class="card-text">Responsive landing</p>
              <a href="https://github.com/vanamayorov/cuba_landing" class="btn btn-primary" target="_blank">Visit github</a>
            </div>
        </div>

    </div>
@endsection