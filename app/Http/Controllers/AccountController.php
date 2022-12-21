<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('accounts.create');
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
        $rules = [
            'id' => 'required|unique:accounts|digits:16',
            'nama' => 'required|max:255',
            'jenis' => 'required',
        ];

        $validated = $request->validate($rules);

        Account::create($validated);

        $request->session()->flash('success',"Successfully adding - {$validated['nama']}!");
        return redirect()->route('accounts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
        $accounts=Account::all();
        return view('accounts.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
        return view('accounts.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
        {
            $rules = [
                'id' => 'required|digits:16',
                'nama' => 'required|max:255',
                'jenis' => 'required',
            ];
            $validated = $request->validate($rules);
            $account::where('id', [$account->id])->update($validated);
    
            $request->session()->flash('success',"Success updating - {$validated['nama']}!");
            return redirect()->route('accounts.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
        $account->delete();
        return redirect()->route('accounts.index')->with('success',"Success delete account!");
    }
}
