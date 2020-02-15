
@auth
    @if(Auth()->user()->status == 1)
         <script>window.location = "/admin";</script>
    @elseif(Auth()->user()->status == 2)
    <script>window.location = "/ceo";</script>
    @endif
@endauth

@extends('layouts.homepage')
@section('content')
<div>
    <h1>This is Home page</h1>
</div>
@endsection