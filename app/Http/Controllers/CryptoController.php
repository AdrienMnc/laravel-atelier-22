<?php

namespace App\Http\Controllers;


class CryptoController extends Controller
{
    public function checkCrypto($cryptoName)
    {

        $allCryptos = ["btc", "eth", "shiba"];

        if (in_array($cryptoName, $allCryptos)) {
            return  "C'est du " . $allCryptos;
        } else {
            return "Not found";
        }
    }
}
