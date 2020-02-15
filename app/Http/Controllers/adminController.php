<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\attend;
use App\extra_bill;
use PDF;
use App\salary_all;

class adminController extends Controller
{
   public function addemployee(){
   	return view('admin.addemployee');
   }
        public function adminprofile($id){
    	$data = user :: find($id);
    	return view('admin.adminprofile')->with('data', $data);
    }


      public function profile_update($id)
    {
    	$data = user :: find($id);
    	return view('admin.profile_update')->with('data', $data);
    }

       public function profile_save(request $request ,$id)
    {
    	$user =user :: find($id);
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$user->phone_number = $request->phone_number;
    	$user->address = $request->address;
    	$user->gender = $request->gender;
    	$user->account_no = $request->account_no;
    	$user->birthday = $request->birthday;
    	$user->save();

    	return view('admin.adminprofile')->with('data', $user);
    	return  back();

    }
     public function employee_list()
     {
        $view_data = user :: orderBy('id','asc')->where('status', '<>' ,'2')->get();
        return view('admin.employee_list')->with('view_data', $view_data);
    }
      public function employee_list_pdf()
    {
         $view_data = user :: orderBy('id','asc')->where('status', '<>' ,'2')->get();

         $pdf = PDF::loadView('admin.employee_list_pdf', compact('view_data' ));
         return $pdf->stream('employee_list.pdf');
    }

    // start attend method

     public function take_attendance()
     {
        $view_data = user :: orderBy('id','asc')->where('status', '<>' ,'2')->get();
        return view('admin.take_attendance')->with('view_data', $view_data);
    }

        public function attendance_store(request $request)
    {
        
        $array = null;

        foreach ($request->user_id as $key => $value) {
            $array[$key] = $value;
        }
         
        $attendstore = new attend();

        $attendstore->user_id = json_encode($array);
        $attendstore->date    = $request->date;
        $attendstore->author  = $request->author;
        $attendstore->status  = $request->status;

        $attendstore->save();

        return redirect()->back();
    }

     public function show_attendance()
    {
        $view_attend = attend :: orderBy('id','asc')->get();
        
        return view('admin.show_attendance')->with('view_attend', $view_attend);
    }





      public function view_details($id)
    {
        $data = attend :: find($id);

        $id = json_decode($data->user_id);
        $username[] = array();


        foreach ($id as $key => $value) {
           $username[$key] = User::where('id',$value)->select('id','name')->first();
        }

        return view('admin.view_details',compact('data','username','id'));
    }
          public function generate_pdf($id)
    {
        $data = attend :: find($id);

        $id = json_decode($data->user_id);
        $username[] = array();


        foreach ($id as $key => $value) {
           $username[$key] = User::where('id',$value)->select('id','name')->first();
        }

         $pdf = PDF::loadView('admin.generate_pdf', compact('data','username','id'));
         return $pdf->stream('attendance.pdf');
    }
    

     public function attend_date_search(request $request)
       {

         $search = $request->search;

         $view_attend = attend :: where('date' , 'like' , '%'.$search.'%')->orderBy
         ('id','desc')->get();

         return view('admin.attend_date_search', compact('search' , 'view_attend'));

       }

       // For salary method
       public function make_salary_report()
     {
        $view_data = user :: orderBy('id','asc')->where('status', '<>' ,'2')->get();
        return view('admin.make_salary_report')->with('view_data', $view_data);
    }
    public function store_salary_report(request $request)
    {  
        $salary_scale=$request->salary_scale;
        $days_of_month=$request->days_of_month;
        $attendance_of_the_month=$request->attendance_of_the_month;
        $divide=$salary_scale/$days_of_month;
        $total_salary=$divide*$attendance_of_the_month;

        $salary = new salary_all;
        $salary->user_id = $request->user_id;
        $salary->name = $request->name;
        $salary->user_account_no = $request->user_account_no;
        $salary->salary_scale = $request->salary_scale;
        $salary->days_of_month = $request->days_of_month;
        $salary->attendance_of_the_month = $request->attendance_of_the_month;
        $salary->author = $request->author;
        $salary->month = $request->month;
        $salary->total_salary =$total_salary;
        $salary->save();

        return redirect()->back();
    } 
      public function show_salary_report()
    {
        return view('admin.show_salary_report');
    }
         public function search_salary_report(request $request)
       {

         $search = $request->search;

         $view_salary = salary_all :: where('month' , 'like' , '%'.$search.'%')->orderBy
         ('id','asc')->get();

         return view('admin.search_salary_report', compact('search' , 'view_salary'));

       }
   public function salary_pdf($search)
   {
     
    $view_salary = salary_all :: where('month' , 'like' , '%'.$search.'%')->orderBy
         ('id','asc')->get();
    
        $pdf = PDF::loadView('admin.salary_report_pdf', compact('view_salary','search' ));
        return $pdf->stream('salary_report.pdf');
   }
   public function make_monthly_extra_bill()
   {
    return view('admin.make_monthly_extra_bill');
   }
     public function extra_bill_save(request $request)
   {
           $extra_bill = new extra_bill;

        $extra_bill->name = $request->name;
        $extra_bill->cost = $request->cost;
        $extra_bill->month = $request->month;
        $extra_bill->author = $request->author;
        $extra_bill->description = $request->description;
        $extra_bill->save();

        return redirect()->back();
   }
         public function show_extra_bill_report()
    {
        return view('admin.show_extra_bill_report');
    }

      public function search_extra_bill(request $request)
       {
         $total_salary=null;
         $search = $request->search;

         $view_extra_bill = extra_bill :: where('month' , 'like' , '%'.$search.'%')->orderBy
         ('id','asc')->get();

         return view('admin.search_extra_bill', compact('search' , 'view_extra_bill','total_salary'));

       }

          public function extra_bill_pdf($search)
   {
    $total_salary=null;
     
    $view_extra_bill = extra_bill :: where('month' , 'like' , '%'.$search.'%')->orderBy
         ('id','asc')->get();
    
        $pdf = PDF::loadView('admin.extra_bill_pdf', compact('view_extra_bill','search','total_salary' ));
        return $pdf->stream('monthly_extra_bill.pdf');
   }
}
