<?php

namespace App\Http\Controllers;

use App\customerSurvey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Excel;
use Illuminate\Support\Facades\Session;

class CustomerSurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      // USER INTERFACE
    public function index()
    {
        return view('/SurveyForm');
    }

    public function success()
    {
        return view('/success');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveData(Request $request)
    {  
        
        $survey = customerSurvey::create($request->all());
        return back()->with('success','Thank you! We value your opinion.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\customerSurvey  $customerSurvey
     * @return \Illuminate\Http\Response
     */
            // ADMIN INTERFACE

    // FETCH DATA FROM DATABASE AND DISPLAY ON A TABLE AND EXCEL SHEET
    public function layout()
    {
        return view ('/layout');
    }
    public function dashboard()
    {
        return view ('/Dashboard');
    }
    
    public function view (customerSurvey $customerSurvey)
    {
        $views = DB::table('customer_surveys')->get();

        return view('/Survey Reports', ['views' => $views]);
    }

    // function excel()
    // {
    //  $customerView = DB::table('customer_surveys')->get()->toArray();
    //  $customer_array[] = array('Customer Name', 'Address', 'City', 'Postal Code', 'Country');
    //  foreach($customer_data as $customer)
    //  {
    //   $customer_array[] = array(
    //    'Customer Name'  => $customer->CustomerName,
    //    'Address'   => $customer->Address,
    //    'City'    => $customer->City,
    //    'Postal Code'  => $customer->PostalCode,
    //    'Country'   => $customer->Country
    //   );
    //  }
    //  Excel::create('Customer Data', function($excel) use ($customer_array){
    //   $excel->setTitle('Customer Data');
    //   $excel->sheet('Customer Data', function($sheet) use ($customer_array){
    //    $sheet->fromArray($customer_array, null, 'A1', false, false);
    //   });
    //  })->download('xlsx');
    // }
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customerSurvey  $customerSurvey
     * @return \Illuminate\Http\Response
     */
    public function edit(customerSurvey $customerSurvey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\customerSurvey  $customerSurvey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customerSurvey $customerSurvey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customerSurvey  $customerSurvey
     * @return \Illuminate\Http\Response
     */
    public function destroy(customerSurvey $customerSurvey)
    {
        //
    }
}
