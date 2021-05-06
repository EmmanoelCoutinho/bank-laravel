<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Conta;
use App\Models\ContaCorrente;

class NewContaControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Conta::all();
        return view('bank.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('bank.addAccount');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Conta::create([
            'account' => $request->account,
            'agency' => $request->agency,
            'balance' => $request->balance,
        ]);

        return redirect('/bank');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Conta::findOrFail($id);
        return view('bank.editAccount', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Conta::findOrFail($id);
        $calc = ($data->balance + $request->balance);

        $data->update([
            'balance' => $calc
        ]);

        return redirect('/bank');
    }

    public function withdraw(Request $request, $id)
    {
        $data = Conta::findOrFail($id);
        if (($data->balance - $request->balance) > 0) {
            $calc = ($data->balance - $request->balance);

            $data->update([
                'balance' => $calc
            ]);
        } else {
            echo "saldo insuficente!";
        }

        return redirect('/bank');
    }

    public function editCustom(Request $request, $id)
    {
        $data = Conta::findOrFail($id);
        $data->update([
            'account' => $request->account,
            'agency' => $request->agency
        ]);

        return redirect('/bank');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Conta::findOrFail($id);
        $data->delete();

        return redirect('/bank');
    }
}
