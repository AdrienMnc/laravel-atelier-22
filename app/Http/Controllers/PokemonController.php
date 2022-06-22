<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pokedex(Request $request)
    {
        $type = $request->type;

        $feu = ["salameche", "caninos", "poussifeu"];
        $eau = ["kaiminus", "carapuce", "psykokwak"];
        $plante = ["bulbizarre", "mimantis", "ninjask"];

        if ($type === "feu") {
            $text = $feu;
        } elseif ($type === "eau") {
            $text = $eau;
        } elseif ($type === "plante") {
            $text = $plante;
        } else {
            return response("error", 404);
        }

        return response($text, 200);
    }
}
