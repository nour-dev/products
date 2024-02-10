@extends('layouts.index.master')
@section('css')
@endsection
@section('title')
    Beauty
@stop
@section('content')
    <header class="header-7">
        <div class="header-7-flex">
            <div class="header-7-content">
                <div class="_3d-block-for-text">
                    <p class="uppercase-title-dark">
                        Ecommerce
                    </p>
                </div>
                <div class="_3d-block-for-text">
                    <h1 class="heading is-header-4-title-1">
                        Unleash your inner radiance
                    </h1>
                </div>
                <style>
                    .circle-button-text-1 {
                        opacity: 0;
                        transition: opacity 0.3s ease;
                    }

                    .circle-button-icon-1 {
                        transition: opacity 0.3s ease;
                    }

                    .main-circle-button:hover .circle-button-icon-1 {
                        opacity: 0;
                    }

                    .main-circle-button:hover .circle-button-text-1 {
                        opacity: 1;
                    }

                    .circle-button-text-1 {
                        opacity: 0;
                        transition: opacity 0.3s ease;
                        display: block;
                    }

                    .main-circle-button:hover .circle-button-text-1 {
                        opacity: 1;
                    }

                    /* أسلوب النص Discover */
                    .circle-button-text-1 {
                        opacity: 0;
                        /* غير مرئي بشكل افتراضي */
                        transition: opacity 0.3s ease;
                        /* تأثير انتقالي للعتامة */
                    }

                    /* أسلوب أيقونة السهم */
                    .circle-button-icon-1 {
                        opacity: 1;
                        /* مرئي بشكل افتراضي */
                        transition: opacity 0.3s ease;
                        /* تأثير انتقالي للعتامة */
                    }

                    /* تغيير الأنماط عندما يكون الماوس فوق الزر */
                    .main-circle-button:hover .circle-button-text-1 {
                        opacity: 1;
                        /* جعل النص مرئي عند تحريك الماوس فوق الزر */
                    }

                    .main-circle-button:hover .circle-button-icon-1 {
                        opacity: 0;
                        /* جعل الأيقونة غير مرئية عند تحريك الماوس فوق الزر */
                    }
                </style>
                <div class="_3d-block-for-text">
                    <div>
                        <a href="#discover" class="main-circle-button w-inline-block">
                            <div class="circle-button-content">
                                <p class="circle-button-text-1">Discover</p>
                            </div>
                            <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acad85055e190d_arrow-icon-down-purple-1.svg')}}"
                                loading="lazy" alt="" class="circle-button-icon-1" />
                            <div class="circle-button-border-1"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="header-7-image-1">
                <div class="while-scrolling-effect-5rem">
                    <div class="image-animation-trigger-vertical">
                        <div class="parallax-animation-medium">
                            <div class="animation-color-bg"></div>
                            <img id="parallaxImage" loading="lazy" alt="Mancino - Beauty Webflow template"
                                src="{{ URL::asset('ecommerce/imgs/63bab3c727acad9c7a5e18c6_pexels-anna-shvets-5217954.webp')}}"
                                class="cover-image is-parallax-medium" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-absolute-video">
            <div class="video-sticky-block">
                <div class="image-animation-trigger-vertical">
                    <div class="header-4-bg-3"></div>
                    <div class="animation-color-bg is-purple-dark"></div>
                    <div data-poster-url="https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad088c5e1914_pexels-ron-lach-8141575-poster-00001.jpg"
                        data-video-urls="https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad088c5e1914_pexels-ron-lach-8141575-transcode.mp4
                ,https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad088c5e1914_pexels-ron-lach-8141575-transcode.webm"
                        data-autoplay="true" data-loop="true" data-wf-ignore="true"
                        class="cover-image w-background-video w-background-video-atom">
                        <video id="4c1a5808-3d1a-2c90-9f2d-535cd19e0047-video" autoplay="" loop=""
                            style="background-image: url(_https_/assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad088c5e1914_pexels-ron-lach-8141575-poster-00001.html);
                   "
                            muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                            <source
                                src="{{ URL::asset('ecommerce/imgs/63bab3c727acad088c5e1914_pexels-ron-lach-8141575-transcode.mp4')}}"
                                data-wf-ignore="true" />
                            <source
                                src="{{ URL::asset('ecommerce/imgs/63bab3c727acad088c5e1914_pexels-ron-lach-8141575-transcode.webm')}}"
                                data-wf-ignore="true" />
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="discover" class="section with-purple-black-bg">
        <div class="container">
            <div class="padding">
                <div class="vertical-flex with-gap-4em">
                    <div class="w-layout-grid content-grid-9">

                        <div id="content-block" class="content-grid-9-block">
                            <div class="elipse-container while-scrolling-effect-3rem">
                                <div class="elipse with-animation">
                                    <div class="elipse-trigger">
                                        <div class="elipse-number" id="number-animation">1</div>
                                    </div>
                                    <div class="elipse is-2nd"></div>
                                    <div class="elipse is-3rd"></div>
                                </div>
                            </div>
                            <div class="text-container while-scrolling-effect-1rem">
                                <p class="content-grid-9-text-1">
                                    Where beauty meets relaxation
                                </p>
                            </div>
                        </div>

                        <div id="w-node-ef17719a-afcb-bd77-5513-b5ec36e6c68d-945e17c1" class="content-grid-9-block">
                            <div class="while-scrolling-effect-3rem">
                                <div class="elipse with-animation">
                                    <div class="elipse-trigger">
                                        <div class="elipse-number">2</div>
                                    </div>
                                    <div class="elipse is-2nd"></div>
                                    <div class="elipse is-3rd"></div>
                                </div>
                            </div>
                            <div class="while-scrolling-effect-1rem">
                                <p class="content-grid-9-text-1">
                                    Experience the ultimate pampering
                                </p>
                            </div>
                        </div>
                        <div id="w-node-_0d0a33e2-f988-55a2-89d9-2e5bc39514d0-945e17c1" class="content-grid-9-block">
                            <div class="while-scrolling-effect-3rem">
                                <div class="elipse with-animation">
                                    <div class="elipse-trigger">
                                        <div class="elipse-number">3</div>
                                    </div>
                                    <div class="elipse is-2nd"></div>
                                    <div class="elipse is-3rd"></div>
                                </div>
                            </div>
                            <div class="while-scrolling-effect-1rem">
                                <p class="content-grid-9-text-1">
                                    Elevate your skin beauty routine
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-layout-grid content-grid-3">
                        <div id="w-node-_955d01e3-f49d-64c0-3556-de86c545843a-945e17c1" class="block-with-elipse">
                            <div class="elipse-bg">
                                <div class="elipse-bg is-2nd"></div>
                                <div class="elipse-bg is-2nd is-left"></div>
                                <div class="elipse-bg is-3rd"></div>
                                <div class="elipse-bg is-3rd is-left"></div>
                            </div>
                            <div id="w-node-faecf3cc-134a-5758-c1b6-d3d08067ad75-945e17c1" class="content-grid-3-image">
                                <div class="_3d-block">
                                    <div class="_3d-trigger">
                                        <div class="image-animation-trigger">
                                            <div class="parallax-animation">
                                                <div class="animation-color-bg"></div>
                                                <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acadd5575e192e_pexels-ron-lach-8129902.webp')}}"
                                                    alt="Mancino - Beauty Webflow template"
                                                    class="cover-image is-parallax" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="w-node-faecf3cc-134a-5758-c1b6-d3d08067ad7c-945e17c1" class="content-grid-3-block-1">
                            <div class="while-scrolling-effect-3rem">
                                <div class="elipse with-animation">
                                    <div class="elipse-trigger">
                                        <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acaddbe05e1932_star-fill0-wght400-grad0-opsz48.svg')}}"
                                            loading="lazy" alt="" class="icon is-larger" />
                                    </div>
                                    <div class="elipse is-2nd"></div>
                                    <div class="elipse is-3rd"></div>
                                </div>
                            </div>
                            <div class="while-scrolling-effect-3rem">
                                <h2 class="heading is-small-title is-2nd">
                                    Cosmetics
                                </h2>
                            </div>
                            <div class="while-scrolling-effect-1rem">
                                <p class="content-grid-3-text-1">
                                    Provide anti-aging benefits and improve skin texture and
                                    tone.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-layout-grid content-grid-3">
                        <div id="w-node-faecf3cc-134a-5758-c1b6-d3d08067ad8b-945e17c1" class="content-grid-3-block-1">
                            <div class="while-scrolling-effect-3rem">
                                <div class="elipse with-animation">
                                    <div class="elipse-trigger">
                                        <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acaddbe05e1932_star-fill0-wght400-grad0-opsz48.svg')}}"
                                            loading="lazy" alt="" class="icon is-larger" />
                                    </div>
                                    <div class="elipse is-2nd"></div>
                                    <div class="elipse is-3rd"></div>
                                </div>
                            </div>
                            <div class="while-scrolling-effect-3rem">
                                <h2 class="heading is-small-title is-2nd">
                                    Services
                                </h2>
                            </div>
                            <div class="while-scrolling-effect-1rem">
                                <p class="content-grid-3-text-1">
                                    We offer a wide range of colors and shades to suit
                                    individual preferences.
                                </p>
                            </div>
                        </div>
                        <div id="w-node-faecf3cc-134a-5758-c1b6-d3d08067ad99-945e17c1" class="content-grid-3-image">
                            <div class="_3d-block">
                                <div class="_3d-trigger">
                                    <div class="image-animation-trigger-vertical">
                                        <div class="parallax-animation">
                                            <div class="animation-color-bg"></div>
                                            <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acaddb645e18f7_pexels-karolina-grabowska-7321652.webp')}}"
                                                alt="Mancino - Beauty Webflow template" class="cover-image is-parallax" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------st_Featured products---------------------------------------->
    <section class="section with-purple-black-bg">
        <div class="padding top-0em">
            <div class="vertical-flex with-gap-6em">
                <h3 class="heading is-extra-small-title is-normal">
                    Featured products
                </h3>
                <div class="products w-dyn-list">
                    <div role="list" class="products-list w-dyn-items">
                        <div id="w-node-_35c6081d-061f-8235-47f0-897f83c58994-945e17c1" role="listitem"
                            class="product-item w-dyn-item">
                            <div class="product-size">
                                <div class="product-background-color"></div>
                                <div class="product-content">
                                    <a href="type/shampoos.html" class="product-small-link w-inline-block">
                                        <p>Shampoos</p>
                                    </a>
                                    <h3 class="heading is-product-title">
                                        Eye gel
                                    </h3>
                                    <p data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                        class="product-price">
                                        $ 19.00 USD
                                    </p>
                                    <p class="product-description-1">
                                        Natural product that is suitable for your skin type
                                        and body care.
                                    </p>
                                    <div class="product-buttons">
                                        <a href="{{ route('details_product') }}"
                                            class="main-button is-product-detail w-inline-block">
                                            <div class="button-text">Detail</div>
                                        </a>

                                    </div>
                                </div>
                                <div class="_3d-block">
                                    <div class="_3d-trigger">

                                        <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acad186d5e19ef_pexels-ron-lach-8128688.jpg') }}"
                                            data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                            alt="Eye gel" class="cover-image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="w-node-_35c6081d-061f-8235-47f0-897f83c58994-945e17c1" role="listitem"
                            class="product-item w-dyn-item">
                            <div class="product-size">
                                <div class="product-background-color"></div>
                                <div class="product-content">
                                    <a href="type/shampoos.html" class="product-small-link w-inline-block">
                                        <p>Shampoos</p>
                                    </a>
                                    <h3 class="heading is-product-title">
                                        Eye gel
                                    </h3>
                                    <p data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                        class="product-price">
                                        $ 19.00 USD
                                    </p>
                                    <p class="product-description-1">
                                        Natural product that is suitable for your skin type
                                        and body care.
                                    </p>
                                    <div class="product-buttons">
                                        <a href="{{ route('details_product') }}"
                                            class="main-button is-product-detail w-inline-block">
                                            <div class="button-text">Detail</div>
                                        </a>

                                    </div>
                                </div>
                                <div class="_3d-block">
                                    <div class="_3d-trigger">
                                        <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acad186d5e19ef_pexels-ron-lach-8128688.jpg') }}"
                                            data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                            alt="Eye gel" class="cover-image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="w-node-_35c6081d-061f-8235-47f0-897f83c58994-945e17c1" role="listitem"
                            class="product-item w-dyn-item">
                            <div class="product-size">
                                <div class="product-background-color"></div>
                                <div class="product-content">
                                    <a href="type/shampoos.html" class="product-small-link w-inline-block">
                                        <p>Shampoos</p>
                                    </a>
                                    <h3 class="heading is-product-title">
                                        Eye gel
                                    </h3>
                                    <p data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                        class="product-price">
                                        $ 19.00 USD
                                    </p>
                                    <p class="product-description-1">
                                        Natural product that is suitable for your skin type
                                        and body care.
                                    </p>
                                    <div class="product-buttons">
                                        <a href="{{ route('details_product') }}"
                                            class="main-button is-product-detail w-inline-block">
                                            <div class="button-text">Detail</div>
                                        </a>

                                    </div>
                                </div>
                                <div class="_3d-block">
                                    <div class="_3d-trigger">
                                        <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acad186d5e19ef_pexels-ron-lach-8128688.jpg') }}"
                                            data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                            alt="Eye gel" class="cover-image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="w-node-_35c6081d-061f-8235-47f0-897f83c58994-945e17c1" role="listitem"
                            class="product-item w-dyn-item">
                            <div class="product-size">
                                <div class="product-background-color"></div>
                                <div class="product-content">
                                    <a href="type/shampoos.html" class="product-small-link w-inline-block">
                                        <p>Shampoos</p>
                                    </a>
                                    <h3 class="heading is-product-title">
                                        Eye gel
                                    </h3>
                                    <p data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                        class="product-price">
                                        $ 19.00 USD
                                    </p>
                                    <p class="product-description-1">
                                        Natural product that is suitable for your skin type
                                        and body care.
                                    </p>
                                    <div class="product-buttons">
                                        <a href="{{ route('details_product') }}"
                                            class="main-button is-product-detail w-inline-block">
                                            <div class="button-text">Detail</div>
                                        </a>

                                    </div>
                                </div>
                                <div class="_3d-block">
                                    <div class="_3d-trigger">

                                        <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acad186d5e19ef_pexels-ron-lach-8128688.jpg') }}"
                                            data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                            alt="Eye gel" class="cover-image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="w-node-_35c6081d-061f-8235-47f0-897f83c58994-945e17c1" role="listitem"
                            class="product-item w-dyn-item">
                            <div class="product-size">
                                <div class="product-background-color"></div>
                                <div class="product-content">
                                    <a href="type/shampoos.html" class="product-small-link w-inline-block">
                                        <p>Shampoos</p>
                                    </a>
                                    <h3 class="heading is-product-title">
                                        Eye gel
                                    </h3>
                                    <p data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                        class="product-price">
                                        $ 19.00 USD
                                    </p>
                                    <p class="product-description-1">
                                        Natural product that is suitable for your skin type
                                        and body care.
                                    </p>
                                    <div class="product-buttons">
                                        <a href="{{ route('details_product') }}"
                                            class="main-button is-product-detail w-inline-block">
                                            <div class="button-text">Detail</div>
                                        </a>

                                    </div>
                                </div>
                                <div class="_3d-block">
                                    <div class="_3d-trigger">
                                        <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acad186d5e19ef_pexels-ron-lach-8128688.jpg') }}"
                                            data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                            alt="Eye gel" class="cover-image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="w-node-_35c6081d-061f-8235-47f0-897f83c58994-945e17c1" role="listitem"
                            class="product-item w-dyn-item">
                            <div class="product-size">
                                <div class="product-background-color"></div>
                                <div class="product-content">
                                    <a href="type/shampoos.html" class="product-small-link w-inline-block">
                                        <p>Shampoos</p>
                                    </a>
                                    <h3 class="heading is-product-title">
                                        Eye gel
                                    </h3>
                                    <p data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                        class="product-price">
                                        $ 19.00 USD
                                    </p>
                                    <p class="product-description-1">
                                        Natural product that is suitable for your skin type
                                        and body care.
                                    </p>
                                    <div class="product-buttons">
                                        <a href="{{ route('details_product') }}"
                                            class="main-button is-product-detail w-inline-block">
                                            <div class="button-text">Detail</div>
                                        </a>

                                    </div>
                                </div>
                                <div class="_3d-block">
                                    <div class="_3d-trigger">

                                        <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acad186d5e19ef_pexels-ron-lach-8128688.jpg') }}"
                                            data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                            alt="Eye gel" class="cover-image" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="div-block-10">
                        <p class="product-cta-text">
                            We offer a wide range of colors and shades to suit
                            individual preferences.
                        </p>
                        <a href="home-ecommerce.html" class="main-button w-inline-block">
                            <div class="button-text">All products</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------end_Featured products---------------------------------------->
    <!---------------------------st_Services---------------------------------------->
    <section class="section">
        <div class="container is-full-width">
            <div class="padding">
                <div class="vertical-flex with-gap-6em">
                    <h4 class="heading is-extra-small-title is-normal">
                        Services
                    </h4>
                    <div class="listing-2 w-dyn-list">
                        <div role="list" class="listing-2-list-2 w-dyn-items">
                            <div role="listitem" class="listing-2-item w-dyn-item">
                                <a href="l" class="listing-2-link-block-3 w-inline-block">
                                    <div class="listing-2-content-2">
                                        <h4 class="listing-heading-uni-1">Hair styling</h4>
                                        <p class="listing-text is-smaller">
                                            Hair styling includes services such as cutting,
                                            coloring, and styling hair to create a desired look
                                            or style.
                                        </p>
                                    </div>
                                    <div href="#" class="main-circle-button">
                                        <div class="circle-button-content">
                                            <p class="circle-button-text-1">
                                                Discover
                                            </p>
                                        </div>
                                        <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acad2b935e18bd_mancino-icon-right-purple-dark-2.svg')}}"
                                            loading="lazy" alt="" class="circle-button-icon-1 is-extra-larger" />
                                        <div class="circle-button-border-1"></div>
                                    </div>
                                    <div class="_3d-block">
                                        <div class="_3d-trigger">
                                            <div class="image-animation-trigger">
                                                <div class="animation-color-bg is-purple-dark"></div>
                                                <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acad21a35e19fa_pexels-cottonbro-studio-7440057.jpg') }}"
                                                    class="cover-image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listing-gradient-color"></div>
                                </a>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

















    <!---------------------------end_Services---------------------------------------->
    <!---------------------------st_Skincare---------------------------------------->

    {{-- <div class="section-listing-7">
        <div class="listing-7-overlay-color"></div>
        <div class="container"></div>
        <div class="listing-7 w-dyn-list">
            <div role="list" class="listing-7-list w-dyn-items">
                <div role="listitem" class="listing-7-item w-dyn-item">
                    <div class="listing-7-block">
                        <a href="" class="listing-7-link w-inline-block">
                            <div id="w-node-eec97cbb-d321-0b38-6bff-b618e9d00787-945e17c1" class="listing-7-content">
                                <p class="listing-7-link-content" style="transform: translate3d(0px, 0rem, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 1; display: block;">
                                    A cosmetic products are used to improve the appearance
                                    of your beauty.
                                </p>
                            </div>
                            <p class="listing-7-name">Skincare</p>
                            <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acad2b935e18bd_mancino-icon-right-purple-dark-2.svg" loading="lazy" data-w-id="eec97cbb-d321-0b38-6bff-b618e9d0078a" alt="" class="listing-7-icon" style="transform: translate3d(0em, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 1; display: block;">
                        </a>
                    </div>
                    <div style="background-image: url(&quot;https://assets-global.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acad3b9e5e19c4_pexels-shiny-diamond-3762762.jpg&quot;); opacity: 1; display: block;"
                        class="listing-7-image-main"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <!---------------------------end_Skincare---------------------------------------->

    <!---------------------------st_the_team---------------------------------------->
    <section class="section overflow-visible">
        <div class="container is-content-grid-2">
            <div class="padding is-content-grid-2">
                <div class="w-layout-grid content-grid-2">
                    <div id="w-node-_72f1f35f-5edf-a0e7-93d8-6329696a43f9-945e17c1" class="grid-2-block-3">
                        <div class="grid-2-image">
                            <div class="image-animation-trigger-vertical">
                                <div class="parallax-animation">
                                    <div class="animation-color-bg is-green-light"></div>
                                    <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acad33d25e1937_pexels-max-vakhtbovych-7195821.webp')}}"
                                        alt="Mancino - Beauty Webflow template" class="cover-image is-parallax" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="w-node-_72f1f35f-5edf-a0e7-93d8-6329696a43ff-945e17c1" class="grid-2-block-4">
                        <div class="about-block is-2nd">
                            <div class="about-icon">
                                <img src="{{ URL::asset('ecommerce/imgs/63971da05572a3419687f352_star-icon-brown.svg')}}"
                                    loading="lazy" alt="" class="about-icon-image" />
                            </div>
                            <p class="about-title">The Team</p>
                            <p class="about-text">
                                Working with us can be a rewarding and exciting career
                            </p>
                        </div>
                        <div class="about-block is-2nd">
                            <div class="about-icon">
                                <img src="{{ URL::asset('ecommerce/imgs/63971da05572a3419687f352_star-icon-brown.svg')}}"
                                    loading="lazy" alt="" class="about-icon-image" />
                            </div>
                            <p class="about-title">Professionals</p>
                            <p class="about-text">
                                Working with us can be a rewarding and exciting career
                            </p>
                        </div>
                        <div class="about-block is-2nd">
                            <div class="about-icon">
                                <img src="{{ URL::asset('ecommerce/imgs/63971da05572a3419687f352_star-icon-brown.svg')}}"
                                    loading="lazy" alt="" class="about-icon-image" />
                            </div>
                            <p class="about-title">Hairstylists</p>
                            <p class="about-text">
                                Working with us can be a rewarding and exciting career
                            </p>
                        </div>
                        <div class="about-block is-2nd">
                            <div class="about-icon">
                                <img src="{{ URL::asset('ecommerce/imgs/63971da05572a3419687f352_star-icon-brown.svg')}}"
                                    loading="lazy" alt="" class="about-icon-image" />
                            </div>
                            <p class="about-title">Makeup artists</p>
                            <p class="about-text">
                                Working with us can be a rewarding and exciting career
                            </p>
                        </div>
                        <a href="about-1.html" class="main-button w-inline-block">
                            <div class="button-text">About us</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!---------------------------end_the_team---------------------------------------->
        <!---------------------------st_Testimonials---------------------------------------->
        <div class="last-section-purple-color"></div>
        <div class="container is-testimonial">
            <div class="padding in-testimonials">
                <div class="vertical-flex with-gap-4em">
                    <h6 class="heading is-small-title">Testimonials</h6>
                    <div class="reviews-cms w-dyn-list">
                        <div role="list" class="review-cms-list w-dyn-items">
                            <div role="listitem" class="review-cms-item w-dyn-item">
                                <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acad777a5e19fd_pexels-mikhail-nilov-7623286%20(1).jpg') }}"
                                    loading="lazy" alt="Testimonial 4" class="review-cms-guest-image" />
                                <p class="review-cms-text">
                                    Booked a massage and it was exactly what I needed.
                                    Highly recommend.
                                </p>
                                <p class="review-cms-guest-name">Amelia Burrier</p>
                                <div class="div-block-7"></div>
                            </div>
                            <div role="listitem" class="review-cms-item w-dyn-item">
                                <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acad670b5e19fc_pexels-jorge-fakhouri-filho-2616974.jpg') }}"
                                    loading="lazy" alt="Testimonial 3" class="review-cms-guest-image" />
                                <p class="review-cms-text">
                                    I always have a great experience here. Staff is friendly
                                    and the atmosphere is relaxing.
                                </p>
                                <p class="review-cms-guest-name">Alison Dawson</p>
                                <div class="div-block-7"></div>
                            </div>
                            <div role="listitem" class="review-cms-item w-dyn-item">
                                <img src="{{ URL::asset('ecommerce/imgs/63bab3c727acadc7575e19f9_pexels-valeria-boltneva-1034012.jpg') }}"
                                    loading="lazy" alt="Testimonial 2" class="review-cms-guest-image" />
                                <p class="review-cms-text">
                                    Had a fantastic service at beauty salon. My skin has
                                    never looked better.
                                </p>
                                <p class="review-cms-guest-name">Martin Eberhart</p>
                                <div class="div-block-7"></div>
                            </div>
                        </div>
                    </div>
                    <a href="reviews.html" class="main-button w-inline-block">
                        <div class="button-text">All reviews</div>
                    </a>
                    <div class="elipse-bg in-testimonials is-pink">
                        <div class="elipse-bg is-2nd is-pink"></div>
                        <div class="elipse-bg is-2nd is-left is-pink"></div>
                        <div class="elipse-bg is-3rd is-pink"></div>
                        <div class="elipse-bg is-3rd is-left is-pink"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!---------------------------end_Testimonials---------------------------------------->

    <!---------------------------st_the_read---------------------------------------->
    <section class="section with-purple-black-bg">
        <div class="container is-full-width">
            <div class="padding less-paddings-2">
                <div class="vertical-flex with-gap-6em">
                    <div class="blogs w-dyn-list">
                        <div role="list" class="blog-list less-gap w-dyn-items">
                            <div role="listitem" class="blog-item w-dyn-item">
                                <a href="blog/natural-beauty-tips-for-enhancing-your-natural-features.html"
                                    class="blog-link w-inline-block">
                                    <div class="blog-title-block">
                                        <div class="blog-categories">
                                            <p class="blog-category-text-1">Inside saloon</p>
                                            <p class="blog-featured-text-1 w-condition-invisible">
                                                Featured
                                            </p>
                                        </div>
                                        <p class="blog-name">
                                            Natural Beauty: Tips for Enhancing Your Natural
                                            Features
                                        </p>
                                        <div class="main-button is-transparent">
                                            <div class="button-text">Read</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div role="listitem" class="blog-item w-dyn-item">
                                <a href="blog/say-goodbye-to-skincare-struggles-expert-recommended-beauty-services.html"
                                    class="blog-link w-inline-block">
                                    <div class="blog-title-block">
                                        <div class="blog-categories">
                                            <p class="blog-category-text-1">The team</p>
                                            <p class="blog-featured-text-1 w-condition-invisible">
                                                Featured
                                            </p>
                                        </div>
                                        <p class="blog-name">
                                            Say Goodbye to Skincare Struggles:
                                            Expert-Recommended Beauty Services
                                        </p>
                                        <div class="main-button is-transparent">
                                            <div class="button-text">Read</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
