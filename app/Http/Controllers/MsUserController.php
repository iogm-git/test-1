<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\ms_user;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class MsUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.management.user.index', ['page' => 'User', 'style' => 'index', 'data' => ms_user::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.management.user.create', ['page' => 'User', 'style' => 'create']);
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
            'user_id' => 'required|unique:ms_users,user_id',
            'user_name' => 'required',
            'password' => 'required',
            'departement' => 'required',
        ]);

        ms_user::create([
            'user_id' => $input['user_id'],
            'user_name' => $input['user_name'],
            'password' => Hash::make($input['password']),
            'departement' => $input['departement'],
            'input_by' => auth()->user()->user_id,
            'input_date' => Carbon::now()->format('Y/m/d H:i:s')
        ]);

        return redirect('/user')->with('success', "Input User : {$input['user_id']}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ms_user  $ms_user
     * @return \Illuminate\Http\Response
     */
    public function show(ms_user $ms_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ms_user  $ms_user
     * @return \Illuminate\Http\Response
     */
    public function edit(ms_user $ms_user)
    {
        //
        return view('pages.management.user.edit', ['page' => 'User', 'style' => 'edit', 'user' => $ms_user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ms_user  $ms_user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ms_user $ms_user)
    {
        //
        $request->validate([
            'user_name' => 'required',
            'departement' => 'required'
        ]);

        $ms_user->update($request->all());
        return redirect('/user')->with('success', 'ID User updated : ' . $ms_user->user_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ms_user  $ms_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(ms_user $ms_user)
    {
        //
        $ms_user->delete();

        return redirect()->route('user.index')
            ->with('success', 'User deleted : ' . $ms_user->user_id);
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
