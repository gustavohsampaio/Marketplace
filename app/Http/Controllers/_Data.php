<?php

namespace App\Http\Controllers;

class _Data {

    public static function get() {

        $items = []; //Array de objetos

        // criacao de um objeto para cada produto

        $items [] = (object)[
            "id" => 1,
            "imagem" => "/imagens/sucodetox.png",
            "nome" => "Suco Detox",
            "valor" => 15.90
        ];

        $items [] = (object)[
            "id" => 2,
            "imagem" => "/imagens/sabonete.png",
            "nome" => "Sabonetes vegano",
            "valor" => 29.90
        ];

        $items [] = (object)[
            "id" => 3,
            "imagem" => "/imagens/shampoobamboo.png",
            "nome" => "Shampoo Verde",
            "valor" => 22.90
        ];

        $items [] = (object)[
            "id" => 4,
            "imagem" => "/imagens/shampoolaranja.png",
            "nome" => "Shampoo Laranja",
            "valor" => 22.90
        ];

        $items [] = (object)[
            "id" => 5,
            "imagem" => "/imagens/serumoleo.png",
            "nome" => "Serúm Facial",
            "valor" => 65.90
        ];

        $items [] = (object)[
            "id" => 6,
            "imagem" => "/imagens/serum.png",
            "nome" => "Serúm C",
            "valor" => 75.90
        ];

        $items [] = (object)[
            "id" => 7,
            "imagem" => "/imagens/locao.png",
            "nome" => "Loção Facial",
            "valor" => 35.90
        ];

        $items [] = (object)[
            "id" => 8,
            "imagem" => "/imagens/locoes.png",
            "nome" => "Balm Corporal",
            "valor" => 29.90
        ];

        $items [] = (object)[
            "id" => 9,
            "imagem" => "/imagens/perfume.png",
            "nome" => "Perfume Chanel",
            "valor" => 99.90
        ];

        return $items;
    }
}
