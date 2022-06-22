<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request,)
    {

        return view("country.show")->with(["country" => $request->country]);
    }
}
