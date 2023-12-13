<?php

namespace App\Http\Controllers;

use App\Exports\ItemsExport;
use App\Models\ms_item;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class MsItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.management.item.index',  ['page' => 'Item', 'style' => 'index', 'data' => ms_item::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.management.item.create', ['page' => 'Item', 'style' => 'create']);
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
            'item_id' => 'required|unique:ms_items,item_id',
            'item_name' => 'required',
            'category' => 'required',
        ]);

        $input['input_by'] = auth()->user()->user_id;
        $input['input_date'] = Carbon::now()->format('Y/m/d H:i:s');

        ms_item::create($input);

        return redirect('/item')->with('success', "Input Item : {$input['item_id']}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ms_item  $ms_item
     * @return \Illuminate\Http\Response
     */
    public function show(ms_item $ms_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ms_item  $ms_item
     * @return \Illuminate\Http\Response
     */
    public function edit(ms_item $ms_item)
    {
        //
        return view('pages.management.item.edit', ['page' => 'Item', 'style' => 'edit', 'item' => $ms_item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ms_item  $ms_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ms_item $ms_item)
    {
        //
        $request->validate([
            'item_name' => 'required',
            'category' => 'required'
        ]);

        $ms_item->update($request->all());
        return redirect('/item')->with('success', 'ID Item updated : ' . $ms_item->item_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ms_item  $ms_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(ms_item $ms_item)
    {
        //
        $ms_item->delete();

        return redirect()->route('item.index')
            ->with('success', 'Item Deleted : ' . $ms_item->item_id);
    }

    public function export()
    {
        return Excel::download(new ItemsExport, 'items.xlsx');
    }
}
