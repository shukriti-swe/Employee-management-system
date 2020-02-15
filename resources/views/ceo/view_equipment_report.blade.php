@extends('ceo.ceolayout.homepagedesign')
@section('content')
   <div class="container">
   	  <div >
     <form action="{{route('search_equipments_report')}}" method="get"><br><br><br>
     <input type="date" name="search" required="">
     <button class="btn btn-danger" type="submit" id="primary">Search date</button>
   </form>
  </div>
        </div>
   </div>
@endsection   