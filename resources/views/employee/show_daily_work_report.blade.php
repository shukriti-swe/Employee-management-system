@extends('employee.employeelayout.homepagedesign')
@section('content')
   <div class="container">
   	  <div >
     <form action="{{route('search_daily_work_report')}}" method="get"><br><br><br>
     <input type="date" name="search" required="">
     <button class="btn btn-danger" type="submit" id="primary">Search month</button>
   </form>
  </div>
        </div>
   </div>
@endsection   