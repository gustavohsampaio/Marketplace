<div class="container-for-list-product">

    <div class="product">

        <div class="product-image-cart">
            <a href="#">
                <img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}">
            </a>
        </div>

        <div class="product-name">{{ $produto->nome }}</div>

        <div class="product-value">R$ {{ number_format($produto->valor, 2, ',') }}</div>

        <div>
            <div class="quantity-selector">

                <a href='{{ url("/selfcare/sub-product-cart/{$produto->id}") }}' class="btn-quantity btn-minus">-</a>
                <div class="quantity-total">{{ $produto->qnt }}</div>
                <a href='{{ url("/selfcare/add-product-cart/{$produto->id}") }}' class="btn-quantity btn-more">+</a>

            </div>
        </div>

        <div>R$ {{ number_format($produto->valor * $produto->qnt, 2, ',') }}</div>
        <div class="btn-remove-product">
            <a href='{{ url("/selfcare/del-product-cart/{$produto->id}") }}'>

                <svg class="svg-inline--fa fa-trash-alt fa-w-14" aria-hidden="true" focusable="false" data-prefix="fal"
                    data-icon="trash-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor"
                        d="M296 432h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8zm-160 0h16a8 8 0 0 0 8-8V152a8
                    8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8zM440 64H336l-33.6-44.8A48 48 0 0 0 264 0h-80a48 48 0 0 0-38.4 19.2L112 64H8a8 8 0 0 0-8
                    8v16a8 8 0 0 0 8 8h24v368a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V96h24a8 8 0 0 0 8-8V72a8 8 0 0 0-8-8zM171.2 38.4A16.1 16.1 0 0 1 184
                    32h80a16.1 16.1 0 0 1 12.8 6.4L296 64H152zM384 464a16 16 0 0 1-16 16H80a16 16 0 0 1-16-16V96h320zm-168-32h16a8 8 0 0 0 8-8V152a8 8 0 0
                    0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8z">
                    </path>
                </svg>

            </a>
        </div>

    </div>

    <div class="product-break">

        <div class="product-image-cart">
            <a href="#">
                <img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}">
            </a>
        </div>

        <div class="product-name">{{ $produto->nome }}

            <div class="product-details">

                <div class="product-value">R$ {{ number_format($produto->valor, 2, ',') }}</div>

                <div>
                    <div class="quantity-selector">

                        <a href='{{ url("/selfcare/sub-product-cart/{$produto->id}") }}'
                            class="btn-quantity btn-minus">-</a>
                        <div class="quantity-total">{{ $produto->qnt }}</div>
                        <a href='{{ url("/selfcare/add-product-cart/{$produto->id}") }}'
                            class="btn-quantity btn-more">+</a>

                    </div>
                </div>

                <div class="product-value-total">R$ {{ number_format($produto->valor * $produto->qnt, 2, ',') }}</div>
                <div class="btn-remove-product">
                    <a href='{{ url("/selfcare/del-product-cart/{$produto->id}") }}'>

                        <svg class="svg-inline--fa fa-trash-alt fa-w-14" aria-hidden="true" focusable="false"
                            data-prefix="fal" data-icon="trash-alt" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M296 432h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8zm-160 0h16a8 8 0 0 0 8-8V152a8
                        8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8zM440 64H336l-33.6-44.8A48 48 0 0 0 264 0h-80a48 48 0 0 0-38.4 19.2L112 64H8a8 8 0 0 0-8
                        8v16a8 8 0 0 0 8 8h24v368a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V96h24a8 8 0 0 0 8-8V72a8 8 0 0 0-8-8zM171.2 38.4A16.1 16.1 0 0 1 184
                        32h80a16.1 16.1 0 0 1 12.8 6.4L296 64H152zM384 464a16 16 0 0 1-16 16H80a16 16 0 0 1-16-16V96h320zm-168-32h16a8 8 0 0 0 8-8V152a8 8 0 0
                        0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8z">
                            </path>
                        </svg>

                    </a>
                </div>
            </div>

        </div>



    </div>

</div>
