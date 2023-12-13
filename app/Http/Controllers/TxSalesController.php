<?php

namespace App\Http\Controllers;

use App\Exports\TxSalesExport;
use App\Models\ms_customer;
use App\Models\ms_salesman;
use App\Models\tx_sales;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class TxSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.management.tx-sales.index', ['page' => 'TX Sales', 'style' => 'index', 'data' => tx_sales::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('pages.management.tx-sales.create', ['page' => 'TX Sales', 'style' => 'create', 'customer' => ms_customer::all(), 'salesman' => ms_salesman::all()]);
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
            'sales_id' => 'required|unique:tx_sales,sales_id',
            'sales_no' => 'required|unique:tx_sales,sales_no',
            'customer_id' => 'required',
            'salesman_id' => 'required',
        ]);

        $input['create_by'] = auth()->user()->user_id;
        $input['input_date'] = Carbon::now()->format('Y/m/d H:i:s');

        tx_sales::create($input);

        return redirect('/tx-sales')->with('success', "Input Data : {$input['sales_id']}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tx_sales  $tx_sales
     * @return \Illuminate\Http\Response
     */
    public function show(tx_sales $tx_sales)
    {
        //
        return view('pages.management.tx-sales.show', ['page' => 'TX Sales', 'style' => 'show', 'tx_sales' => $tx_sales]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tx_sales  $tx_sales
     * @return \Illuminate\Http\Response
     */
    public function edit(tx_sales $tx_sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tx_sales  $tx_sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tx_sales $tx_sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tx_sales  $tx_sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(tx_sales $tx_sales)
    {
        //
        $tx_sales->delete();

        return redirect()->route('tx-sales.index')
            ->with('success', 'TX Sales deleted : ' . $tx_sales->sales_id);
    }

    public function export()
    {
        return Excel::download(new TxSalesExport, 'tx-sales.xlsx');
    }
}
