<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contact', ['contacts' => $contacts]);
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'imie' => 'required|min:2|max:20|regex:/^[\p{L}]{2,20}$/u',
            'naz' => 'required|min:2|max:20|regex:/^[\p{L}]{2,20}$/u',
            'wiek' => 'required|integer|min:1|max:999',
            'panstwo' => 'required',
            'telefon' => 'required|digits:9',
            'email' => 'required|email',
        ]);

        $zgloszenie = new Contact();
        $zgloszenie->reportType = $request->reportType;
        $zgloszenie->imie = $request->imie;
        $zgloszenie->naz = $request->naz;
        $zgloszenie->wiek = $request->wiek;
        $zgloszenie->panstwo = $request->panstwo;
        $zgloszenie->telefon = $request->telefon;
        $zgloszenie->email = $request->email;
        $zgloszenie->uwagi = $request->uwagi;

        $zainteresowaniaString = implode(",", $request->zainteresowania);
        $zgloszenie->zainteresowania = $zainteresowaniaString;

        if ($zgloszenie->save()) {
            return redirect()->back()->with('success', 'success');
        }
        return view('contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::find($id);

        if ($contact->delete()) {
            return redirect()->route('contact');
        } else
            return back();
    }
}
