<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartProductsController extends Controller {

    public function cartProducts(Request $request) {

        $cart = session('cart', []);

        $total = 0;

        $qnt_itens = 0;

        foreach($cart as $k => $p) {

            $total += ($p->valor * $p->qnt);

            $qnt_itens += $p->qnt;

        }

        if ($qnt_itens > 1) {
            $qnt_itens = "( $qnt_itens itens)";
        } else if ($qnt_itens == 1) {
            $qnt_itens = "($qnt_itens item)";
        } else {
            $qnt_itens = '';
        }

        return view('marketplace.cart-products', [
            'produtos' => $cart,
            'total' => $total,
            'subtotal' => $total,
            'quantidade_itens' => $qnt_itens
        ]);

    }

    public function incProduct(Request $request, $id) {

        $cart = session('cart', []);

        foreach($cart as $key => $product) {
            if($product->id == $id) {
                $product->qnt++;
                $cart[$key] = $product;
                session(['cart' => $cart]);
            }
        }

        return redirect('/selfcare/cart-products')->with('message', 'Quantidade adicionada!');

    }

    public function subProduct(Request $request, $id) {

        $cart = session('cart', []);

        foreach($cart as $key => $product) {
            if($product->id == $id) {

                if($product->qnt >= 2) {
                    $product->qnt--;
                    $cart[$key] = $product;
                    session(['cart' => $cart]);
                } else {
                    return $this->delProduct($request, $id);
                }
            }
        }

        return redirect('/selfcare/cart-products')->with('message', 'Quantidade reduzida!');

    }

    public function addProduct(Request $request, $id) {

        $cart = session('cart', []);

        $result =  array_filter($cart, function ($item) use ($id) {
            return $item->id == $id;
        });

        if(count($result) > 0) {
            return $this->incProduct($request, $id);
        }

        // SE NÃO ENCONTROU UM RETURN NA EXECUÇÃO, O PRODUTO NÃO EXISTE NO CARRINHO (VAMOS ADICIONAR): //

        $items = _Data::get();

        $result =  array_filter($items, function ($item) use ($id) {
            return $item->id == $id;
        });

        if (count($result) > 0 ) {
            $result = clone current($result);
        } else {
            return "Produto não encontrado!";
        }

        $result->qnt = 1;

        $cart [] = $result;

        session(['cart' => $cart]);

        return redirect('/selfcare/cart-products')->with('message', 'Produto adicionado!');

    }

    public function delProduct(Request $request, $id) {

        $cart = session('cart', []);

        $result =  array_filter($cart, function ($item) use ($id) {

            return $item->id != $id;

        });

        session(['cart' => $result]);

        return redirect('/selfcare/cart-products')->with('message', 'Produto removido!');

    }
}
