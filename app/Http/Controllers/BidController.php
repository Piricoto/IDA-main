<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Http\Requests\BidRequest;

/**
 * Class BidController
 * @package App\Http\Controllers
 */
class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bids = Bid::paginate();

        return view('bid.index', compact('bids'))
            ->with('i', (request()->input('page', 1) - 1) * $bids->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bid = new Bid();
        return view('bid.create', compact('bid'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BidRequest $request)
    {
        Bid::create($request->validated());

        return redirect()->route('bids.index')
            ->with('success', 'Bid created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bid = Bid::find($id);

        return view('bid.show', compact('bid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bid = Bid::find($id);

        return view('bid.edit', compact('bid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BidRequest $request, Bid $bid)
    {
        $bid->update($request->validated());

        return redirect()->route('bids.index')
            ->with('success', 'Bid updated successfully');
    }

    public function destroy($id)
    {
        Bid::find($id)->delete();

        return redirect()->route('bids.index')
            ->with('success', 'Bid deleted successfully');
    }
}
