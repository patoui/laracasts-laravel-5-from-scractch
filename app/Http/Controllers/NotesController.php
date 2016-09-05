<?php

namespace App\Http\Controllers;

use App\Card;
use App\Http\Requests;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
        $card->addNote(
            new Note($request->all())
        );

        return back();
    }
}
