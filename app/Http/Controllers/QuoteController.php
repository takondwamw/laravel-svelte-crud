<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use Inertia\Inertia;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuoteRequest $request , Quote $quote )
    {
        //
        // $this->authorize('create', Quote::class);
        $data = $request->validated();
        $quote = $quote->create($data);
        return response([
            'message' => 'Quotation Has Been Received You will Be Assisted Accordingly !!',
            'quote'   => $quote,
        ]);
        // return Inertia::render('/',['message' => 'Quotation Has Been Received You will Be Assisted Accordingly !!']);
        // ->withHeaders([
        //     'X-Inertia' => true,
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Quote $quote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quote $quote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuoteRequest $request, Quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quote $quote)
    {
        $quote->delete();
        return inertia('/',['message' => 'Quote Removed Successfully']);
    }
}
