<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    //
    function index()
    {
        return '<h1> test ini adalah text nya</h1>';

    }

    function detail($id)
    {
        return '<h1> ini adalah id saya dengan id $id </h1>';
    }
}
