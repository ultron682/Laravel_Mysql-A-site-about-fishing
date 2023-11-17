<?php

namespace App\Http\Controllers;

use App\Models\Tool;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tools = Tool::orderBy('id', 'asc')->get();
        //$tools = Tool::all();
        return view('tools', ['tools' => $tools]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tool = new Tool();
        return view('toolsForm', ['tool' => $tool]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:30',
            'src' => ['nullable', 'image'],
        ]);

        if (\Auth::user() == null) {
            return view('tools'); // jesli uzytkownik nie jest zalogowany
        }

        if ($request->hasFile('src')) {
            $src = $request->file('src')->store(options: 'toolsImgs');
        }

        $tool = new Tool();
        // $tool->user_id = \Auth::user()->id; // id zalogowanego
        $tool->name = $request->name; // nazwa pola z walidatora
        $tool->src = $src ?? null; // nazwa pola z walidatora

        if ($tool->save()) {
            return redirect('tools');
        }
        return view('tools');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tool = Tool::find($id);
        //Sprawdzenie czy użytkownik jest autorem komentarza
        // if (Auth::user()->id != 0) {
        // return back()->with([
        //     'success' => false,
        //     'message_type' => 'danger',
        //     'message' => 'Nie posiadasz uprawnień do przeprowadzenia tej operacji.'
        // ]);
        // }
        return view('toolsEditForm', ['tool' => $tool]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tool = Tool::find($id);
        //Sprawdzenie czy użytkownik jest autorem komentarza
        // if (\Auth::user()->id != $tool->user_id) {
        //     return back()->with([
        //         'success' => false,
        //         'message type' => 'danger',
        //         'message' => 'Nie posiadasz uprawnień do przeprowadzenia tej operacji.'
        //     ]);
        // }
        $tool->name = $request->name;

        if ($request->hasFile('src')) {
            $tool->src = $request->file('src')->store(options: 'toolsImgs');
        }



        if ($tool->save()) {
            return redirect()->route('tools');
        }
        return "Wystąpił błąd.";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Znajdz komentarz o danych id:
        $comment = Tool::find($id);
        //Sprawdz czy użytkownik jest autorem komentarza:

        // if (\Auth::user()->id != $comment->user_id) {
        //     return back();
        // }
        if ($comment->delete()) {
            return redirect()->route('tools');
        } else
            return back();
    }
}
