<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Selfcare </title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>

<body>

    <!-- #region CABEÇALHO -->
    <x-brand-menu-action></x-brand-menu-action>
    <!-- #endregion -->

    <!-- #region BANNER -->
    <div>
        <img id="banner" src="/imagens/banner.svg" alt="banner">
    </div>
    <!-- #endregion -->

    <section>

        <!-- #region RESUMO DOS RESULTADOS -->
        <div class="info-result-bolder">
            <header class="container" id="information-results">
                <div class="information-category-results"> promoção </div>
                <div id="number-results" class="information-category-results"> {{$quantidade}} </div>
            </header>
        </div>
        <!-- #endregion -->

        <!-- #region RESULTADOS -->
        <main class="container-product">

            <ul id="product-list">

                @foreach($produtos as $produto)

                <x-product-list :produto="$produto"></x-product-list>

                @endforeach

            </ul>

        </main>
        <!-- #endregion -->

    </section>

    <!-- #region RODAPÉ DA PÁGINA -->
    <footer class="back-footer">
        <x-footer></x-footer>
    </footer>
    <!-- #endregion -->
    <x-toast></x-toast>

</body>
</html>
