<?php

namespace App\Http\Controllers;

use App\Exports\CustomersExport;
use App\Models\ms_customer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class MsCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.management.customer.index',  ['page' => 'Customer', 'style' => 'index', 'data' => ms_customer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.management.customer.create', ['page' => 'Customer', 'style' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->validate([
            'customer_id' => 'required|unique:ms_customers,customer_id',
            'customer_name' => 'required',
            'address' => 'required',
            'nick_name' => 'required',
        ]);

        $input['input_by'] = auth()->user()->user_id;
        $input['input_date'] = Carbon::now()->format('Y/m/d H:i:s');

        ms_customer::create($input);

        return redirect('/customer')->with('success', "Input Customer : {$input['customer_id']}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ms_customer  $ms_customer
     * @return \Illuminate\Http\Response
     */
    public function show(ms_customer $ms_customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ms_customer  $ms_customer
     * @return \Illuminate\Http\Response
     */
    public function edit(ms_customer $ms_customer)
    {
        //
        return view('pages.management.customer.edit', ['page' => 'Customer', 'style' => 'edit', 'customer' => $ms_customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ms_customer  $ms_customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ms_customer $ms_customer)
    {
        //
        $request->validate([
            'customer_name' => 'required',
            'address' => 'required',
            'nick_name' => 'required',
        ]);

        $ms_customer->update($request->all());
        return redirect('/customer')->with('success', 'ID Customer updated : ' . $ms_customer->customer_name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ms_customer  $ms_customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(ms_customer $ms_customer)
    {
        //
        $ms_customer->delete();

        return redirect()->route('customer.index')
            ->with('success', 'Customer Deleted : ' . $ms_customer->customer_id);
    }

    public function export()
    {
        return Excel::download(new CustomersExport, 'customer.xlsx');
    }
}
