<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    public function index(Request $request) {

        $items = _Data::get(); //Array de objetos
        $qnt = count($items);

        if ($qnt > 1) {
            $qnt = $qnt.' produtos';
        } else {
            $qnt = $qnt.' produto';
        }

        return view('marketplace.index', [
            'produtos' => $items,
            'quantidade' => $qnt
        ]);
    }
}
