<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Transaction;
class TransactionsController extends Controller
{
    public function store(Request $request)
    {
        $transaction = new Transaction();
        $transaction->type_transaction = $request->type_transaction;
        $transaction->save($transaction);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::find($id);
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
        $transaction = Transaction::find($id);
        $transaction->type_transaction = $request->type_transaction;
        $transaction->save();
        return response()->json($transaction);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = Transaction::find($id);
        $transaction->type_transaction = $request->type_transaction;
        $transaction->save($transaction);
    }
}
