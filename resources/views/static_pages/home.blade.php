@extends('layouts.default')
@section('content')
  @if (Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared._user_info',['user'=>Auth::user()])
        </section>
      </aside>
    </div>
  @else
  <div class="jumbotron">
    <h1>hello sjh</h1>
    <p class="lead">
      Now you see <a href="http://www.liesinapril.com">test web page</a>example
    </p>
    <p>
      story begin.
    </p>
    <p>
    <a class="btn btn-lg btn-success" href=" {{ route('signup') }}" role="button">Register</a>
    </p>
  </div>
  @endif

@endsection
