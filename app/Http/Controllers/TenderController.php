<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tender as RequestsTender;
use App\Http\Requests\TenderRequest;
use App\Models\Department;
use App\Models\Location;
use App\Models\Method;
use App\Models\Tender;
use App\Repositories\TenderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TenderController extends Controller
{
    private $tenderRepository;
    public function __construct(TenderRepository $tenderRepository)
    {
        $this->tenderRepository = $tenderRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [];
        $data['tenders'] = $this->tenderRepository->getAllData();
        // $data['tenders'] =  Tender::with('location', 'method', 'department')->get();
        return view('Backend.tendertable', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (View::exists('Backend.tenderform')) {
            $data = [];
            $data['departments'] = $this->tenderRepository->getDepartment();
            $data['locations'] = $this->tenderRepository->getLocation();
            $data['methods'] = $this->tenderRepository->getMethod();
            return view('Backend.tenderform', $data);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TenderRequest $request)
    {
        $data = $request->except('_token');
        $tender = $this->tenderRepository->storeOrUpdate($id = null, $data);
        if ($tender = true) {
            return redirect()->back()->with('massege', 'Tender data insert successfully');
        }
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
        $data = [];
        $data['tender'] = Tender::where('id', $tender->id)->first();
        return view('frontend.singletender', $data);
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
