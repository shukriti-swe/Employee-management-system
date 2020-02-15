@extends('admin.adminlayout.homepagedesign')
@section('content')
<div class="container">
  <div >
     <form action="{{route('search_salary_report')}}" method="get"><br><br><br>
     <input type="month" name="search" required="">
     <button class="btn btn-danger" type="submit" id="primary">Search month</button>
   </form>
  </div>

        
        </div>
      

@endsection  