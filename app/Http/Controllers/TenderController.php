<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tender as RequestsTender;
use App\Http\Requests\TenderRequest;
use App\Models\Department;
use App\Models\Location;
use App\Models\Method;
use App\Models\Tender;
use Illuminate\Http\Request;

class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[];
        $data['tenders']=  Tender::with('location','method','department')->get();
        return view('Backend.tendertable',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[];
        $data['locations']=Location::all();
        $data['departments']=Department::all();
        $data['methods']=Method::all();
        return view('Backend.tenderform',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TenderRequest $request)
    {


        Tender::create([
            'tender_id' => $request->tender_id,
            'description' => $request->description,
            'document_price' => $request->document_price,
            'tender_security' => $request->tender_security,
            'date' => $request->date,
            'department_id' => $request->department_id,
            'method_id' => $request->method_id,
            'location_id' => $request->location_id,
            'similar' => $request->similar,
            'turnover' => $request->turnover,
            'liquid' => $request->liquid,
            'tender_capacity' => $request->tender_capacity,
            'other' => $request->other
        ]);

        return redirect()->back()->with('massege','Tender data insert successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function show(Tender $tender)
    {
        // dd($tender);
        $data=[];
        $data['tender']= Tender::where('id',$tender->id)->first();
        return view('frontend.singletender',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function edit(Tender $tender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tender $tender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tender $tender)
    {
        //
    }
}
