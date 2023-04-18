<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{
    public function index()
    {
        return Bid::all();
    }
 
    public function show($id)
    {
        return Bid::find($id);
    }

    public function store(Request $request)
    {
        return Bid::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $bids = Bid::findOrFail($id);
        $bids->update($request->all());

        return $bids;
    }

    public function delete(Request $request, $id)
    {
        $bids = Bid::findOrFail($id);
        $bids->delete();

        return 204;
    }
}
