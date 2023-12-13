<?php

namespace App\Http\Controllers;

use App\Exports\SalesmanExport;
use App\Models\ms_salesman;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class MsSalesmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.management.salesman.index',  ['page' => 'Salesman', 'style' => 'index', 'data' => ms_salesman::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.management.salesman.create', ['page' => 'Salesman', 'style' => 'create']);
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
            'salesman_id' => 'required|unique:ms_salesmans,salesman_id',
            'sales_person' => 'required',
            'alamat' => 'required',
        ]);

        $input['input_by'] = auth()->user()->user_id;
        $input['input_date'] = Carbon::now()->format('Y/m/d H:i:s');

        ms_salesman::create($input);

        return redirect('/salesman')->with('success', "Input Salesman : {$input['salesman_id']}");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ms_salesman  $ms_salesman
     * @return \Illuminate\Http\Response
     */
    public function show(ms_salesman $ms_salesman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ms_salesman  $ms_salesman
     * @return \Illuminate\Http\Response
     */
    public function edit(ms_salesman $ms_salesman)
    {
        //
        return view('pages.management.salesman.edit', ['page' => 'Salesman', 'style' => 'edit', 'salesman' => $ms_salesman]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ms_salesman  $ms_salesman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ms_salesman $ms_salesman)
    {
        //
        $request->validate([
            'sales_person' => 'required',
            'alamat' => 'required'
        ]);

        $ms_salesman->update($request->all());
        return redirect('/salesman')->with('success', 'ID Salesman updated : ' . $ms_salesman->sales_person);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ms_salesman  $ms_salesman
     * @return \Illuminate\Http\Response
     */
    public function destroy(ms_salesman $ms_salesman)
    {
        //
        $ms_salesman->delete();

        return redirect()->route('salesman.index')
            ->with('success', 'Salesman Deleted : ' . $ms_salesman->salesman_id);
    }

    public function export()
    {
        return Excel::download(new SalesmanExport, 'salesman.xlsx');
    }
}
