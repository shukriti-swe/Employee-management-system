<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\daily_work;
use App\equipment;
use App\monthly_closing_report;
use PDF;



class employeeController extends Controller
{
       public function employeeprofile($id){
    	$data = user :: find($id);
    	return view('employee.employeeprofile')->with('data', $data);
    }


      public function profile_update($id)
    {
    	$data = user :: find($id);
    	
    	return view('employee.profile_update')->with('data', $data);
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

    	return view('employee.employeeprofile')->with('data', $user);
    	
    }

    // Start Daily work report

       public function make_daily_work_report()
    {
        return view('employee.make_daily_work_report');
    }
         public function daily_work_report_save(request $request)
   {
           $daily_work_report = new daily_work;
        $daily_work_report->user_id = $request->user_id;
        $daily_work_report->author = $request->author;
        $daily_work_report->date = $request->date;
        $daily_work_report->name = $request->name;
        $daily_work_report->status = $request->status;
        
        $daily_work_report->work_details = $request->work_details;
        $daily_work_report->save();

        return redirect()->back();
   }
     public function show_daily_work_report()
    {
        return view('employee.show_daily_work_report');
    }
         public function search_daily_work_report(request $request)
       {
          
         $search = $request->search;

         $daily_work = daily_work :: where('date' , 'like' , '%'.$search.'%')->orderBy
         ('id','asc')->get();

         return view('employee.search_daily_work_report', compact('search' , 'daily_work'));

       }
        public function daily_work_pdf($search)
   {
     
    $daily_work = daily_work :: where('date' , 'like' , '%'.$search.'%')->orderBy
         ('id','asc')->get();
    
        $pdf = PDF::loadView('employee.daily_work_pdf', compact('daily_work','search' ));
        return $pdf->stream('daily_work.pdf');
   }

    // Equipment cost start here

     public function make_equipment_cost_report()
    {
        return view('employee.make_equipment_cost_report');
    }
    public function equipment_report_save(request $request)
   {
           $equipment = new equipment;
        $equipment->user_id = $request->user_id;
        $equipment->author = $request->author;
        $equipment->date = $request->date;
        $equipment->name = $request->name;
        $equipment->quantity = $request->quantity;
        $equipment->price = $request->price;
        $equipment->status = $request->status;
        $equipment->save();

        return redirect()->back();
   }
    public function show_equipment_report()
    {
        return view('employee.show_equipment_report');
    }
      public function search_equipment_report(request $request)
       {
          
         $search = $request->search;

         $equipment = equipment :: where('date' , 'like' , '%'.$search.'%')->orderBy
         ('id','asc')->get();

         return view('employee.search_equipment_report', compact('search' , 'equipment'));

       }
         public function equipment_pdf($search)
   {
     
    $equipment = equipment :: where('date' , 'like' , '%'.$search.'%')->orderBy
         ('id','asc')->get();
    
        $pdf = PDF::loadView('employee.equipment_pdf', compact('equipment','search' ));
        return $pdf->stream('equipment.pdf');
   }

   // Monthly closing report start here

 public function make_monthly_closing_report()
    {
        return view('employee.make_monthly_closing_report');
    }
     public function monthly_closing_report_save(request $request)
   {
        $monthly_closing_report = new monthly_closing_report;

        $monthly_closing_report->user_id = $request->user_id;
        $monthly_closing_report->author = $request->author;
        $monthly_closing_report->month = $request->month;
        $monthly_closing_report->product_name = $request->product_name;
        $monthly_closing_report->equipment_recieve_date = $request->equipment_recieve_date;
        $monthly_closing_report->equipment_quantity = $request->equipment_quantity;
        $monthly_closing_report->time_duration = $request->time_duration;
        $monthly_closing_report->product_quantity = $request->product_quantity;
        $monthly_closing_report->delivery_date = $request->delivery_date;
        $monthly_closing_report->description = $request->description;

        $monthly_closing_report->save();

        return redirect()->back();
   }
    public function show_monthly_closing_report()
    {
        return view('employee.show_monthly_closing_report');
    }
          public function search_monthly_closing_report(request $request)
       {
          
         $search = $request->search;

         $monthly_closing_report = monthly_closing_report :: where('month' , 'like' , '%'.$search.'%')->orderBy
         ('id','asc')->get();

         return view('employee.search_monthly_closing_report', compact('search' , 'monthly_closing_report'));

       }
                public function monthly_closing_report_pdf($search)
   {
     
    $monthly_closing_report = monthly_closing_report :: where('month' , 'like' , '%'.$search.'%')->orderBy
         ('id','asc')->get();
    
        $pdf = PDF::loadView('employee.monthly_closing_report_pdf', compact('monthly_closing_report','search' ));
        return $pdf->stream('monthly_closing_reports.pdf');
   }
      

}
