<li class="product-list-items">

    <div class="items-information">

        <div class="data-product">

            <a href="#">
                <img class="image-item" src="{{ $produto->imagem }}" alt="{{ $produto->nome }}">
            </a>

            <a href="#">
                <span class="title-item">{{ $produto->nome }}</span>
            </a>

            <a href="#">
                <span class="price-item">
                    R$ <span> {{ number_format($produto->valor , 2, ',') }} </span>
                </span>
            </a>

        </div>

        <a href='{{ url("/selfcare/add-product-cart/{$produto->id}")}}'class="btn-buy">comprar</a>

    </div>

</li>
