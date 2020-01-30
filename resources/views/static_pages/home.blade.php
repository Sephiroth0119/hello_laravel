@extends('layouts.default')
@section('content')
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
@endsection
