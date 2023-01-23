<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cart Products </title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>

<body>

    <!-- #region CABEÇALHO -->
    <x-brand-menu-action></x-brand-menu-action>
    <!-- #endregion -->

    <!-- #region PRODUCT LIST -->
    <main class="back-cart">

        <div class="container cart-shopping">

            <div class="container-cart">

                <div class="information-cart">
                    <img id="icon-cart" src="/imagens/carrinho.svg" alt="carrinho de compra">
                    <h1>Meu carrinho <span>{{$quantidade_itens}}</span></h1>
                </div>

                @if ($quantidade_itens == '')
                    <x-empty-cart></x-empty-cart>
                @endif

                @foreach($produtos as $produto)

                <x-product-list-cart :produto="$produto"></x-product-list-cart>

                @endforeach

            </div>

            <div class="container-order-summary">

                <h2>resumo do pedido</h2>

                <ul class="summary">
                    <li class="items-summary subtotal">
                        <span class="description">Subtotal</span>
                        <span class="results">R$ {{ number_format($subtotal , 2, ',') }}</span>
                    </li>

                    <li class="items-summary discounts">
                        <span class="description">Descontos</span>
                        <span class="results">R$ 0,00</span>
                    </li>

                    <li class="items-summary total">
                        <span class="description">Total</span>
                    <span class="results">R$ {{ number_format($total , 2, ',') }}</span>
                    </li>
                </ul>

                <a class="btn btn-keep-buying" href="{{ url('/selfcare') }}">
                    <svg class="svg-inline--fa fa-long-arrow-left fa-w-14" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z"></path>
                    </svg>
                    <span>continuar comprando</span>
                </a>

                <a class="btn btn-checkout" href="#">
                    <span>finalizar compra</span>
                    <svg class="svg-inline--fa fa-long-arrow-right fa-w-14" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                    </svg>
                </a>

            </div>

        </div>



    </main>
    <!-- #endregion -->
    <x-toast></x-toast>
</body>
</html>
