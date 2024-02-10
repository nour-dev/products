@extends('layouts.index.master')
@section('css')
@endsection
@section('title')
    Beauty
@stop
@section('content')
    <div class="breadcrumbs-main is-2nd">
        <a href="https://mancino-beauty-ecommerce-template.webflow.io/" class="breadcrumb-text-main is-light">Home</a><img
            src="https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad06445e1934_arrow-right-fill0-wght400-grad0-opsz48 (1).svg"
            loading="lazy" alt="" class="breadcrumb-icon-main" /><a
            href="https://mancino-beauty-ecommerce-template.webflow.io/type/face-care"
            class="breadcrumb-text-main is-light">Face care</a><img
            src="https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad06445e1934_arrow-right-fill0-wght400-grad0-opsz48 (1).svg"
            loading="lazy" alt="" class="breadcrumb-icon-main" /><a
            href="https://mancino-beauty-ecommerce-template.webflow.io/treatment/lips"
            class="breadcrumb-text-main is-light">Lips</a><img
            src="https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad06445e1934_arrow-right-fill0-wght400-grad0-opsz48 (1).svg"
            loading="lazy" alt="" class="breadcrumb-icon-main" /><a href="fluid-cream.html" aria-current="page"
            class="breadcrumb-text-main is-light w--current">Fluid cream</a>
    </div>
    <div data-w-id="6d2b7dd5-1efa-18a1-d71e-c8523a73be57" class="header-3">
        <div class="header-3-padding">
            <div class="header-3-grid">
                <div id="w-node-_6d2b7dd5-1efa-18a1-d71e-c8523a73be5a-0808f7ca" class="header-3-block-1">
                    <div class="header-3-content-1">
                        <p data-w-id="6d2b7dd5-1efa-18a1-d71e-c8523a73be5d" class="product-text">
                            Product
                        </p>
                        <h1 data-w-id="6d2b7dd5-1efa-18a1-d71e-c8523a73be60" class="heading is-large-title">
                            Fluid cream
                        </h1>
                        <a data-w-id="80cf4e46-fe0c-aabf-6a6c-6b383f9ecea5"
                            href="https://mancino-beauty-ecommerce-template.webflow.io/type/face-care"
                            class="product-small-link w-inline-block">
                            <p>Face care</p>
                        </a>
                        <p data-w-id="6d2b7dd5-1efa-18a1-d71e-c8523a73be63" class="header-3-subtitle-4">
                            Natural product that is suitable for your skin type and body
                            care.
                        </p>
                        {{-- <div data-w-id="badd2b54-18e7-87aa-6054-b234d0f09fba" class="prices">
                            <div data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3Acompare-at-price%22%3A%7B%22exists%22%3A%22yes%22%2C%22type%22%3A%22CommercePrice%22%7D%7D%7D%2C%22timezone%22%3A%22Europe%2FBratislava%22%7D"
                                class="price-block">
                                <p class="price-text-2">Before</p>
                                <p data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_compare_at_price_7dr10dr%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                    class="price-text-1 is-before-price">
                                    $ 59.00 USD
                                </p>
                            </div>
                            <div data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3Aprice%22%3A%7B%22exists%22%3A%22yes%22%2C%22type%22%3A%22CommercePrice%22%7D%7D%7D%2C%22timezone%22%3A%22Europe%2FBratislava%22%7D"
                                class="price-block is-price-now">
                                <p class="price-text-2">Price now</p>
                                <p data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                    class="price-text-1">
                                    $ 49.00 USD
                                </p>
                            </div>
                        </div> --}}
                        {{-- <div data-w-id="6d2b7dd5-1efa-18a1-d71e-c8523a73be66">
                            <div class="add-to-cart-copy">
                                <form data-node-type="commerce-add-to-cart-form"
                                    data-commerce-sku-id="63c038e8481d8f7689725491" data-loading-text="Adding to cart..."
                                    data-commerce-product-id="63c038e7428b803826359067"
                                    class="w-commerce-commerceaddtocartform buttons-wrap-2">
                                    <input type="number" pattern="^[0-9]+$" inputmode="numeric"
                                        id="quantity-e66748be06ce20fa1ad24bdce0e42d0c"
                                        name="commerce-add-to-cart-quantity-input" min="1"
                                        class="w-commerce-commerceaddtocartquantityinput quantity" value="1" /><input
                                        type="submit" data-node-type="commerce-add-to-cart-button"
                                        data-loading-text="Adding to cart..." value="Add to Cart" aria-busy="false"
                                        aria-haspopup="dialog"
                                        class="w-commerce-commerceaddtocartbutton add-to-cart-button is-2nd" /><a
                                        data-node-type="commerce-buy-now-button" data-default-text="Buy now"
                                        data-subscription-text="Subscribe now" aria-busy="false" aria-haspopup="false"
                                        class="w-commerce-commercebuynowbutton buy-now-button is-2nd"
                                        href="https://mancino-beauty-ecommerce-template.webflow.io/checkout">Buy now</a>
                                </form>
                                <div tabindex="0" style="display: none"
                                    class="w-commerce-commerceaddtocartoutofstock out-of-stock-state" tabindex="0">
                                    <div>Out of stock.</div>
                                </div>
                                <div aria-live="assertive" data-node-type="commerce-add-to-cart-error" style="display: none"
                                    class="w-commerce-commerceaddtocarterror error-state">
                                    <div data-node-type="commerce-add-to-cart-error"
                                        data-w-add-to-cart-quantity-error="Product is not available in this quantity."
                                        data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart."
                                        data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription."
                                        data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item."
                                        data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site."
                                        data-w-add-to-cart-select-all-options-error="Please select an option in each set.">
                                        Product is not available in this quantity.
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div id="w-node-_6d2b7dd5-1efa-18a1-d71e-c8523a73be68-0808f7ca" class="header-3-block-2">
                    <div class="_3d-block">
                        <div class="_3d-trigger">
                            <div class="image-animation-trigger-vertical">
                                <div class="parallax-animation">
                                    <div class="animation-color-bg is-green-light"></div>
                                    <img src="../../assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acad3fe55e19f1_pexels-ron-lach-8140905.jpg"
                                        data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                        alt="Fluid cream" sizes="(max-width: 767px) 100vw, 55vw"
                                        srcset="
                      https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acad3fe55e19f1_pexels-ron-lach-8140905-p-500.jpg   500w,
                      https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acad3fe55e19f1_pexels-ron-lach-8140905-p-800.jpg   800w,
                      https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acad3fe55e19f1_pexels-ron-lach-8140905-p-1080.jpg 1080w,
                      https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acad3fe55e19f1_pexels-ron-lach-8140905.jpg        1920w
                    "
                                        class="cover-image is-parallax" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="discover" data-w-id="6d2b7dd5-1efa-18a1-d71e-c8523a73be6f"
        class="section with-purple-black-bg overflow-visible">
        <div class="padding for-sticky-content">
            <div class="vertical-flex with-gap-4em">
                <div class="sticky-content">
                    <div class="rich-text-on-dark-bg is-bigger w-richtext">
                        <h3>About the product</h3>
                        <p>
                            <strong>Our beauty cosmetic products are used for various
                                purposes, including improving the overall health </strong>and appearance of the skin, hair,
                            and nails and enhancing
                            features such as the eyes, lips, and cheekbones. It&#x27;s
                            essential to choose products suitable for your skin type and
                            concerns and use them as directed to achieve the best
                            results.
                        </p>
                        <h3>Improved skin texture</h3>
                        <p>
                            Skincare products such as exfoliators and masks can help to
                            remove dead skin cells and improve the texture and tone of
                            the skin.
                        </p>
                        <h3>Hydrated skin</h3>
                        <p>
                            Hydrated and moisturized skin. Moisturizers can help to
                            hydrate and nourish the skin, leaving it feeling soft and
                            supple.
                        </p>
                        <h3>Reduced appearance of wrinkles</h3>
                        <p>
                            Anti-aging products such as serums and creams can help to
                            reduce the appearance of fine lines and wrinkles by
                            improving skin elasticity and promoting collagen production.
                        </p>
                    </div>
                </div>
                <div class="sticky-content-image">
                    <div class="sticky-content-image-heigh">
                        <div class="sticky-content-image-block">
                            <div class="while-scrolling-effect-5rem">
                                <div class="image-animation-trigger">
                                    <div class="parallax-animation">
                                        <div class="animation-color-bg is-purple-dark"></div>
                                        <img loading="lazy" alt="Fluid cream"
                                            src="../../assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acad35955e1a14_pexels-mikhail-nilov-8343016.jpg"
                                            sizes="(max-width: 479px) 38vw, (max-width: 767px) 33vw, 30vw"
                                            srcset="
                        https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acad35955e1a14_pexels-mikhail-nilov-8343016-p-500.jpg   500w,
                        https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acad35955e1a14_pexels-mikhail-nilov-8343016-p-800.jpg   800w,
                        https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acad35955e1a14_pexels-mikhail-nilov-8343016-p-1080.jpg 1080w,
                        https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acad35955e1a14_pexels-mikhail-nilov-8343016.jpg        1280w
                      "
                                            class="cover-image is-parallax" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section with-purple-black-bg">
        <div class="container">
            <div class="padding top-0em">
                <div class="vertical-flex with-gap-6em">
                    <div class="gallery w-dyn-list w-dyn-items-repeater-ref">
                        <script
              type="text/x-wf-template"
              id="wf-template-6d2b7dd5-1efa-18a1-d71e-c8523a73bea1"
            >
              %3Cdiv%20role%3D%22listitem%22%20class%3D%22gallery-item%20w-dyn-item%20w-dyn-repeater-item%22%3E%3Ca%20href%3D%22%23%22%20data-wf-sku-bindings%3D%22%255B%257B%2522from%2522%253A%2522f_more_images_4dr%255B%255D%2522%252C%2522to%2522%253A%2522media%2522%257D%255D%22%20class%3D%22gallery-lightbox%20is-large-image%20w-inline-block%20w-dyn-bind-empty%20w-lightbox%22%3E%3Cimg%20alt%3D%22%22%20loading%3D%22lazy%22%20data-wf-sku-bindings%3D%22%255B%257B%2522from%2522%253A%2522f_more_images_4dr%255B%255D%2522%252C%2522to%2522%253A%2522src%2522%257D%255D%22%20src%3D%22%22%20class%3D%22gallery-thumbnail%20w-dyn-bind-empty%22%2F%3E%3Cimg%20src%3D%22https%3A%2F%2Fassets.website-files.com%2F63bab3c727acad36f05e17b8%2F63bab3c727acad68f15e184c_open_in_full_FILL0_wght700_GRAD0_opsz48_white.svg%22%20loading%3D%22lazy%22%20alt%3D%22%22%20class%3D%22icon%20in-gallery%22%2F%3E%3Cdiv%20class%3D%22gallery-background%22%3E%3C%2Fdiv%3E%3Cscript%20type%3D%22application%2Fjson%22%20class%3D%22w-json%22%3E%7B%0A%20%20%22items%22%3A%20%5B%5D%2C%0A%20%20%22group%22%3A%20%22Gallery%22%0A%7D%3C%2Fscript%3E%3C%2Fa%3E%3C%2Fdiv%3E
            </script>
                        <div role="list" class="gallery-grid w-dyn-items w-dyn-hide"
                            data-wf-collection="f_more_images_4dr"
                            data-wf-template-id="wf-template-6d2b7dd5-1efa-18a1-d71e-c8523a73bea1"></div>
                        <div class="empty-state-hidden w-dyn-empty">
                            <div>No items found.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <header data-w-id="6d2b7dd5-1efa-18a1-d71e-c8523a73beaa" class="section-content-3">
        <div class="content-3-flex">
            <div class="content-3-flex-1">
                <div class="_3d-block-for-text">
                    <div class="content-3-grid">
                        <h2 class="heading is-content-3-title">Quality</h2>
                        <p class="content-3-text-1">
                            Cosmetic skincare products are designed to improve your skin
                        </p>
                    </div>
                </div>
                <div class="_3d-block-for-text">
                    <div class="content-3-grid">
                        <h2 class="heading is-content-3-title">Results</h2>
                        <p class="content-3-text-1">
                            Products can be used to cleanse, moisturize, and protect the
                            skin
                        </p>
                    </div>
                </div>
                <div class="_3d-block-for-text">
                    <div class="content-3-grid is-last">
                        <h2 class="heading is-content-3-title">Shop</h2>
                        <p class="content-3-text-1">
                            Different types of skincare products available in our shop
                        </p>
                    </div>
                </div>
            </div>
            <div class="content-3-image-1">
                <div class="while-scrolling-effect-5rem">
                    <div class="image-animation-trigger-vertical">
                        <div class="parallax-animation">
                            <div class="animation-color-bg is-purple-dark"></div>
                            <img srcset="
                  https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad73c55e192d_pexels-mikhail-nilov-6706873-p-500.jpg   500w,
                  https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad73c55e192d_pexels-mikhail-nilov-6706873-p-800.jpg   800w,
                  https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad73c55e192d_pexels-mikhail-nilov-6706873-p-1080.jpg 1080w,
                  https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad73c55e192d_pexels-mikhail-nilov-6706873-p-1600.jpg 1600w,
                  https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad73c55e192d_pexels-mikhail-nilov-6706873.webp       1920w
                "
                                alt="Mancino - Beauty Webflow template" sizes="(max-width: 479px) 80vw, 40vw"
                                src="https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad73c55e192d_pexels-mikhail-nilov-6706873.webp"
                                class="cover-image is-parallax" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-3-image-2">
                <div class="while-scrolling-effect-5rem">
                    <div class="image-animation-trigger-vertical">
                        <div class="parallax-animation">
                            <div class="animation-color-bg is-purple-dark"></div>
                            <img srcset="
                  https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad7ec15e1923_pexels-mikhail-nilov-6707337-p-500.jpg   500w,
                  https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad7ec15e1923_pexels-mikhail-nilov-6707337-p-800.jpg   800w,
                  https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad7ec15e1923_pexels-mikhail-nilov-6707337-p-1080.jpg 1080w,
                  https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad7ec15e1923_pexels-mikhail-nilov-6707337.webp       1280w
                "
                                alt="Mancino - Beauty Webflow template"
                                sizes="(max-width: 479px) 60vw, (max-width: 991px) 40vw, 30vw"
                                src="https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad7ec15e1923_pexels-mikhail-nilov-6707337.webp"
                                class="cover-image is-parallax" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

@endsection
