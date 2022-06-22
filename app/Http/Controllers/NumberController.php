<?php

namespace App\Http\Controllers;

class NumberController extends Controller
{
    public function create($id)
    {
        if ($id % 2 == 0) {
            return "C'est un nombre pair";
        } else {
            return "C'est un nombre impair";
        }
    }
}
