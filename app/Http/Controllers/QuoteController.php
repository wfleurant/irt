<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Quote;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('quote.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $r)
    {
        $this->validate($r, [
            'body' => 'required|min:10|max:1200',
            'notes' => 'string',
        ]);
        $quote = new Quote;
        $quote->body = nl2br(htmlentities($r->input('body'), ENT_QUOTES, 'UTF-8'));
        $quote->body_hash = hash('sha512', $quote->body);
        $quote->notes = (!empty($r->input('notes'))) ? e($r->input('notes')) : null;
        $quote->author_addr = $r->ip();
        $quote->save();

        return redirect('/q/view/'.$quote->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $quote = Quote::findOrFail($id);
        return view('quote.view', compact('quote'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function showNew()
    {
        return view('quote.new');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function showPopular()
    {
        return view('quote.popular');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
