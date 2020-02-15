@extends('employee.employeelayout.homepagedesign')
@if(Auth()->user()->status == 1)
         <script>window.location = "/admin";</script>
    @elseif(Auth()->user()->status == 2)
    <script>window.location = "/ceo";</script>
    @endif
  @if(\Session::has('error'))
    <div class="alert alert-danger">
      {{\Session::get('error')}}
    </div>
  @endif
@section('content')
    <h1>This is Employee index page</h1>
@endsection