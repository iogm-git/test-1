<?php

namespace App\Http\Controllers;

use App\Exports\TxSubSalesExport;
use App\Models\ms_item;
use App\Models\tx_sales;
use App\Models\tx_sub_sales;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TxSubSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.management.tx-sub-sales.index', ['page' => 'TX Sub Sales', 'style' => 'index', 'data' => tx_sub_sales::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.management.tx-sub-sales.create', ['page' => 'TX Sub Sales', 'style' => 'create', 'tx_sales' => tx_sales::all(), 'ms_item' => ms_item::all()]);
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
            'sales_id' => 'required',
            'item_id' => 'required',
            'qty_sales' => 'required|numeric',
            'unit_price' => 'required|numeric'
        ]);

        tx_sub_sales::create($input);

        return redirect('/tx-sub-sales')->with('success', 'TX Sub Sales created : ' . $request->sales_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tx_sub_sales  $tx_sub_sales
     * @return \Illuminate\Http\Response
     */
    public function show(tx_sub_sales $tx_sub_sales)
    {
        //
        return view('pages.management.tx-sub-sales.show', ['page' => 'TX Sub Sales', 'style' => 'show', 'tx_sub_sales' => $tx_sub_sales]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tx_sub_sales  $tx_sub_sales
     * @return \Illuminate\Http\Response
     */
    public function edit(tx_sub_sales $tx_sub_sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tx_sub_sales  $tx_sub_sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tx_sub_sales $tx_sub_sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tx_sub_sales  $tx_sub_sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(tx_sub_sales $tx_sub_sales)
    {
        //
        $tx_sub_sales->delete();

        return redirect()->route('tx-sub-sales.index')->with('success', 'TX Sub Sales deleted : ' . $tx_sub_sales->sales_id);
    }

    public function export()
    {

        return Excel::download(new TxSubSalesExport, 'tx-sub-sales.xlsx');
    }
}
