<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\attend;
use App\extra_bill;
use PDF;
use App\salary_all;
use App\equipment;

class ceoController extends Controller
{
    public function adduser(){
    	return view('ceo.adduser');
    }
     public function ceoprofile($id){
    	$data = user :: find($id);
    	return view('ceo.ceoprofile')->with('data', $data);
    }


      public function profile_update($id)
    {
    	$data = user :: find($id);
    	return view('ceo.profile_update')->with('data', $data);
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

    	return view('ceo.ceoprofile')->with('data', $user);
    	
     }
       public function show_attendance_report()
    {
        $view_attend = attend :: orderBy('id','asc')->get();
        
        return view('ceo.show_attendance_report')->with('view_attend', $view_attend);
    }





      public function view_details($id)
    {
        $data = attend :: find($id);

        $id = json_decode($data->user_id);
        $username[] = array();


        foreach ($id as $key => $value) {
           $username[$key] = User::where('id',$value)->select('id','name')->first();
        }

        return view('ceo.view_details',compact('data','username','id'));
    }
          public function generate_pdf($id)
    {
        $data = attend :: find($id);

        $id = json_decode($data->user_id);
        $username[] = array();


        foreach ($id as $key => $value) {
           $username[$key] = User::where('id',$value)->select('id','name')->first();
        }

         $pdf = PDF::loadView('ceo.generate_pdf', compact('data','username','id'));
         return $pdf->stream('attendance.pdf');
    }
    

     public function attend_date_search(request $request)
       {

         $search = $request->search;

         $view_attend = attend :: where('date' , 'like' , '%'.$search.'%')->orderBy
         ('id','desc')->get();

         return view('ceo.attend_date_search', compact('search' , 'view_attend'));

       }
        public function delete_attendance($id)
       {
        $data = attend :: find($id);
        if(!is_null($data)){
            $data->delete();
        }
        return back();
    }

          public function view_salary_report()
    {
         $view_salary = salary_all :: orderBy('id','asc')->get();
        return view('ceo.view_salary_report', compact('view_salary'));
    }
            public function delete_salary_report($id)
       {
        $data = salary_all :: find($id);
        if(!is_null($data)){
            $data->delete();
        }
        return back();
    }


    // ---

             public function search_salary_date(request $request)
       {

         $search = $request->search;

         $view_salary = salary_all :: where('month' , 'like' , '%'.$search.'%')->orderBy
         ('id','asc')->get();

         return view('ceo.search_salary_date', compact('search' , 'view_salary'));

       }
          public function update_salary_report($id)
    {
        $data = salary_all :: find($id);
        return view('ceo.update_salary_report')->with('data', $data);
    }
        public function update_save_salary_report(request $request ,$id)
    {  
        $salary =salary_all :: find($id);
        $salary_scale=$request->salary_scale;
        $days_of_month=$request->days_of_month;
        $attendance_of_the_month=$request->attendance_of_the_month;
        $divide=$salary_scale/$days_of_month;
        $total_salary=$divide*$attendance_of_the_month;

       
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
           public function delete_save_salary_report($id)
    {
        $data = salary_all :: find($id);
        if(!is_null($data)){
            $data->delete();
        }
        return back();
    }


              public function view_equipment_report()
    {
         $view_equipment = equipment :: orderBy('id','asc')->get();
        return view('ceo.view_equipment_report', compact('view_equipment'));
    }
          public function search_equipments_report(request $request)
       {
          
         $search = $request->search;

         $equipment = equipment :: where('date' , 'like' , '%'.$search.'%')->orderBy
         ('id','asc')->get();

         return view('ceo.search_equipment_report', compact('search' , 'equipment'));

       }
                 public function update_equipment_report($id)
    {
        $data = equipment :: find($id);
        return view('ceo.update_equipment_report')->with('data', $data);
    }

        public function equipment_update_save(request $request ,$id)
   {
          $equipment =equipment :: find($id);
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
              public function delete_equipment_report($id)
    {
        $data = equipment :: find($id);
        if(!is_null($data)){
            $data->delete();
        }
        return back();
    }

       public function view_extrabill_report()
    {
         $view_extrabill = extra_bill :: orderBy('id','asc')->get();
        return view('ceo.view_extrabill_report', compact('view_extrabill'));
    }
              public function search_extra_bill(request $request)
       {
          
         $search = $request->search;

         $extra_bill = extra_bill :: where('month' , 'like' , '%'.$search.'%')->orderBy
         ('id','asc')->get();

         return view('ceo.search_extra_bill', compact('search' , 'extra_bill'));

       }

          public function view_monthly_closing_report()
    {
        return view('ceo.view_monthly_closing_report');
    }
      

                public function search_monthly_closing_report(request $request)
       {
          
         $search = $request->search;

         $monthly_closing_report = monthly_closing_report :: where('month' , 'like' , '%'.$search.'%')->orderBy
         ('id','asc')->get();

         return view('ceo.search_monthly_closing_report', compact('search' , 'monthly_closing_report'));

       }

}
