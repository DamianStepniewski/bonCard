<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of cards.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $cards = Card::paginate(10);
        return view('home', compact('cards'));
    }

    /**
     * Show the form for creating a new card.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created card in storage.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        // Take into account comma decimal separator and replace it with a period
        request()->merge(['balance' => preg_replace('/,/', '.', request('balance'))]);

        $data = request()->validate([
            'card_id' => 'required|unique:cards|digits:20',
            'pin' => 'required|digits:4',
            'activation_date' => 'required|date',
            'expiration_date' => 'required|date|after:activation_date',
            'balance' => 'required:numeric'
        ]);

        $card = new Card($data);
        $card->save();

        return redirect(route('index'));
    }

    /**
     * Show the form for editing the specified card.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Card $card)
    {
        return view('edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Card $card)
    {
        // Take into account comma decimal separator and replace it with a period
        request()->merge(['balance' => preg_replace('/,/', '.', request('balance'))]);

        $data = request()->validate([
            'card_id' => [
                'required',
                'unique:cards,card_id,' . $card->id,
                'digits:20'
            ],
            'pin' => 'required|digits:4',
            'activation_date' => 'required|date',
            'expiration_date' => 'required|date|after:activation_date',
            'balance' => 'required:numeric'
        ]);

        $card->update($data);

        return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {

    }
}
