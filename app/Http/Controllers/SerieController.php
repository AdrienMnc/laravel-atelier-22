<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Isset_;

class SerieController extends Controller
{

    public array $array;

    public function __construct()
    {
        $this->array = [
            "Ozark",
            "Got",
            "Friends",
            "Big Bang Theory",
            "Malcolm"
        ];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("series.index")->with([
            "series" => $this->array
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {



        return view("series.show")->with([
            "serieVariable" => $this->array[$id],
            'id' => $id
        ]);
    }
}
