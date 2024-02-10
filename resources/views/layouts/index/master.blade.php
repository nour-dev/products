<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Test</title>
    <meta content="Mancino Ecommerce - Webflow Ecommerce website template" property="og:title" />
    <meta content="Mancino Ecommerce - Webflow Ecommerce website template" property="twitter:title" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="{{ URL::asset('ecommerce/css/ecommerce.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('ecommerce/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/" rel="preconnect" />
    <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="anonymous" />
    <script src="{{ URL::asset('ecommerce/js/webfont.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('ecommerce/js/styleSwitcher.js') }}"></script>
    <script src="{{ URL::asset('ecommerce/js/script.js') }}" type="text/javascript"></script>
    <link href="{{ URL::asset('ecommerce/imgs/63bab3c727acad1b295e1943_favicon-mancino.png') }}" rel="shortcut icon"
        type="image/x-icon" />
    <link href="{{ URL::asset('ecommerce/imgs/63bab3c727acad310f5e1944_webclip-mancino.jpg') }}"
        rel="apple-touch-icon" />
    <style>
        @keyframes swing {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .elipse-container {
            animation: swing 2s ease-in-out infinite;
        }

        .elipse-trigger:hover .elipse-number {
            animation: fadeOut 0.5s forwards;
        }

        @keyframes fadeOut {
            to {
                opacity: 0;
                transform: translateY(-20px);
            }
        }

        .elipse-trigger:hover .elipse-number {
            animation: fadeIn 0.5s forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <style>
        .product-content {

            transform: translate3d(0, 20px, 0);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .product-content.visible {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    </style>
    <style>
        ._3d-trigger {
            perspective: 1000px;
        }

        .is-parallax {
            will-change: transform;
            transform-style: preserve-3d;
            transition: transform 0.1s;
            /* Smoother transition on movement */
        }
    </style>
</head>

<body>
    <div id="webpage" class="page-wrapper is-dark">
        <div class="fullscreen-menu">
            <div class="fullscreen-inner">
                <div class="fullscreen-menu-column-1">
                    <div class="fullscreen-main-links">
                        <a href="index.html" aria-current="page" class="fullscreen-menu-link w--current">Home</a>
                        <a href="categories-1.html" class="fullscreen-menu-link">Categories</a><a href="services.html"
                            class="fullscreen-menu-link">Services</a><a href="about-1.html"
                            class="fullscreen-menu-link">About</a><a href="contact-1.html"
                            class="fullscreen-menu-link">Contact</a>
                    </div>
                </div>
                <script>
                    document.addEventListener('mousemove', (e) => {
                        const mouseX = e.clientX;
                        const mouseY = e.clientY;
                        const moveX = ((mouseX - window.innerWidth / 2) / window.innerWidth) * 30;
                        const moveY = ((mouseY - window.innerHeight / 2) / window.innerHeight) * 30;
                        document.querySelectorAll('._3d-block-for-text').forEach((element) => {
                            element.style.transform = `rotateX(${moveY}deg) rotateY(${moveX}deg)`;
                        });
                    });
                </script>
                {{-- 
                  <div class="fullscreen-menu-column-2">
                    <div class="socials-in-menu w-dyn-list">
                        <div role="list" class="socials-1-list w-dyn-items">
                            <div role="listitem" class="social-1-item w-dyn-item">
                                <a aria-label="Social Button" 
                                    href="social/twitter.html" class="social-1-link-block w-inline-block"><img
                                        src="https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acad01e55e17f1_twitter-logo-white.svg"
                                        loading="lazy" alt="Twitter" class="social-icon" />
                                    <div class="social-link-circle is-2nd"></div>
                                </a>
                            </div>
                            <div role="listitem" class="social-1-item w-dyn-item">
                                <a aria-label="Social Button" 
                                    href="social/facebook.html" class="social-1-link-block w-inline-block"><img
                                        src="https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acad094d5e181b_facebook-logo-white.svg"
                                        loading="lazy" alt="Facebook" class="social-icon" />
                                    <div class="social-link-circle is-2nd"></div>
                                </a>
                            </div>
                            <div role="listitem" class="social-1-item w-dyn-item">
                                <a aria-label="Social Button" 
                                    href="social/linkedin.html" class="social-1-link-block w-inline-block"><img
                                        src="https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acade6545e1892_linkedin-logo-white.svg"
                                        loading="lazy" alt="LinkedIn" class="social-icon" />
                                    <div class="social-link-circle is-2nd"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="fullscreen-image-column">
                        <div class="fullscreen-image-block">
                            <div class="menu-image-color"></div>
                            <img src="https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad48365e192c_pexels-ron-lach-8129897.webp"
                                loading="lazy" alt="Mancino - Beauty Webflow template" class="menu-cover-image" />
                        </div>
                    </div>
                </div> 
                --}}
                {{-- 
                  <div class="menu-delay-for-animations"></div>
                <div class="fullscreen-menu-bg"></div>
                <div  class="close-button">
                    <div class="close-button-bg"></div>
                </div> 
                  --}}
            </div>
        </div>
        <div data-animation="default" data-collapse="none" data-duration="0" data-easing="ease" data-easing2="ease"
            role="banner" class="navbar w-nav">
            <a href="#" class="menu-button w-inline-block"><img
                    src="https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad180e5e190b_menu-burger-icon.svg"
                    loading="lazy" alt="" class="nav-button-icon" />
                <div class="menu-link-title">Menu</div>
            </a>
            <div class="main-nav">
                <div id="w-node-e4da4c37-ee58-167a-cbd7-451e68993a19-68993a17" class="nav-block-1">
                    <div data-hover="true" data-delay="0" class="dropdown-link w-dropdown">
                        <div class="dropdown-toggle w-dropdown-toggle">
                            <p class="menu-link-title">Categories</p>
                            <div class="dropdown-icon w-icon-dropdown-toggle"></div>
                        </div>
                        <nav class="dropdown-list w-dropdown-list">
                            <div class="menu-links-flex w-dyn-list">
                                <div role="list" class="menu-link-2-list w-dyn-items">
                                    <div role="listitem" class="menu-link-item w-dyn-item">
                                        <a href="{{ route('category') }}" class="menu-link w-inline-block">
                                            <div class="menu-link-content">
                                                <img src="https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acadf4765e1a29_face-fill0-wght300-grad0-opsz48.svg"
                                                    loading="lazy" alt="" class="menu-link-icon" />
                                                <p class="menu-link-name">Skincare</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div role="listitem" class="menu-link-item w-dyn-item">
                                        <a href="category/hair-body.html" class="menu-link w-inline-block">
                                            <div class="menu-link-content">
                                                <img src="https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acadb8945e1a25_face-4-fill0-wght300-grad0-opsz48.svg"
                                                    loading="lazy" alt="" class="menu-link-icon" />
                                                <p class="menu-link-name">Hair &amp; body</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div role="listitem" class="menu-link-item w-dyn-item">
                                        <a href="category/make-up.html" class="menu-link w-inline-block">
                                            <div class="menu-link-content">
                                                <img src="https://assets.website-files.com/63bab3c727acad1be85e17ec/63c03dffb6feeb17e9982464_salinity-fill0-wght300-grad0-opsz48.svg"
                                                    loading="lazy" alt="" class="menu-link-icon" />
                                                <p class="menu-link-name">Make-up</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div role="listitem" class="menu-link-item w-dyn-item">
                                        <a href="category/beauty.html" class="menu-link w-inline-block">
                                            <div class="menu-link-content">
                                                <img src="https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acad29055e1a27_diamond-fill0-wght300-grad0-opsz48.svg"
                                                    loading="lazy" alt="" class="menu-link-icon" />
                                                <p class="menu-link-name">Beauty</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div data-hover="true" data-delay="0" class="dropdown-link w-dropdown">
                        <div class="dropdown-toggle w-dropdown-toggle">
                            <p class="menu-link-title">Services</p>
                            <div class="dropdown-icon w-icon-dropdown-toggle"></div>
                        </div>
                        <nav  class="dropdown-list w-dropdown-list" >
                            <div class="menu-links-flex w-dyn-list">
                                <div role="list" class="menu-link-list w-dyn-items">
                                    <div role="listitem" class="menu-link-item w-dyn-item">
                                        <a href="{{ route('service') }}" class="menu-link w-inline-block"><img
                                                src="{{ URL::asset('ecommerce/imgs/63bab3c727acad5abc5e19f6_pexels-gustavo-fring-3985298.jpg') }}"
                                                loading="lazy" alt="" class="menu-link-image" />
                                            <div class="menu-link-content">
                                                <p class="menu-link-name">Dermal fillers</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div role="listitem" class="menu-link-item w-dyn-item">
                                        <a href="service/makeup-application.html"
                                            class="menu-link w-inline-block"><img
                                                src="{{ URL::asset('ecommerce/imgs/63bab3c727acad9f455e1a1c_pexels-gustavo-fring-3985319.jpg') }}"
                                                loading="lazy" alt="" class="menu-link-image" />
                                            <div class="menu-link-content">
                                                <p class="menu-link-name">Makeup application</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div role="listitem" class="menu-link-item w-dyn-item">
                                        <a href="service/manicures-and-pedicures.html"
                                            class="menu-link w-inline-block"><img
                                                src="{{ URL::asset('ecommerce/imgs/63bab3c727acad6bad5e19fb_pexels-karolina-grabowska-7321724.jpg') }}"
                                                loading="lazy" alt="" class="menu-link-image" />
                                            <div class="menu-link-content">
                                                <p class="menu-link-name">Manicures</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div role="listitem" class="menu-link-item w-dyn-item">
                                        <a href="service/hair-styling.html" class="menu-link w-inline-block"><img
                                                src="{{ URL::asset('ecommerce/imgs/63bab3c727acad21a35e19fa_pexels-cottonbro-studio-7440057.jpg') }}"
                                                loading="lazy" alt="" class="menu-link-image" />
                                            <div class="menu-link-content">
                                                <p class="menu-link-name">Hair styling</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
    var dropdownToggles = document.querySelectorAll('.dropdown-toggle.w-dropdown-toggle');
    var dropdownLists = document.querySelectorAll('.dropdown-list.w-dropdown-list');

    dropdownToggles.forEach(function(dropdownToggle, index) {
        var dropdownList = dropdownLists[index];

        // إضافة الفئة عندما يكون المؤشر فوق العنصر div
        dropdownToggle.addEventListener('mouseenter', function() {
            dropdownToggle.classList.add('w--open');
            dropdownList.classList.add('w--open');
        });

        // إضافة الفئة عندما يكون المؤشر فوق القائمة nav
        dropdownList.addEventListener('mouseenter', function() {
            dropdownToggle.classList.add('w--open');
            dropdownList.classList.add('w--open');
        });

        // إزالة الفئة عندما يغادر المؤشر العنصر div والقائمة nav
        dropdownToggle.addEventListener('mouseleave', function() {
            setTimeout(function() {
                if (!dropdownList.matches(':hover')) {
                    dropdownToggle.classList.remove('w--open');
                    dropdownList.classList.remove('w--open');
                }
            }, 100); // يمكنك تعديل هذا الوقت حسب الحاجة
        });

        dropdownList.addEventListener('mouseleave', function() {
            setTimeout(function() {
                if (!dropdownToggle.matches(':hover')) {
                    dropdownToggle.classList.remove('w--open');
                    dropdownList.classList.remove('w--open');
                }
            }, 100); // يمكنك تعديل هذا الوقت حسب الحاجة
        });
    });
});

                
                </script>
                <nav role="navigation" class="nav-block-2 w-nav-menu">
                    <a href="index.html" aria-current="page" class="brand-link-block w-nav-brand w--current"><img
                            src="https://assets.website-files.com/plugins/Basic/assets/placeholder.60f9b1840c.svg"
                            loading="lazy" alt="" class="logo-image-default" />
                        <div class="brand-logo-block">
                            <p class="brand-name">Mancino</p>
                        </div>
                    </a>
                    <link rel="prefetch" href="index.html" />
                </nav>

                <div id="w-node-e4da4c37-ee58-167a-cbd7-451e68993ac6-68993a17" class="nav-block-3">

                    <a href="{{ route('contact') }}" class="nav-link w-inline-block">
                        <p class="menu-link-title">Contact</p>
                    </a>

                    <a href="{{ route('products') }}" class="nav-link w-inline-block">
                        <p class="menu-link-title">Products</p>
                    </a>

                    <a href="{{ route('blog') }}" class="nav-link w-inline-block">
                        <p class="menu-link-title">Blog</p>
                    </a>

                    <a href="{{ route('about_us') }}" class="nav-link w-inline-block">
                        <p class="menu-link-title">About</p>
                    </a>

                </div>
                <div id="w-node-e4da4c37-ee58-167a-cbd7-451e68993abe-68993a17"
                    class="mobile-menu-button w-nav-button">
                    <div class="menu-mobile-button-flex">
                        <div class="menu-mobile-text">Menu</div>
                        <div class="menu-mobile-dots">
                            <div class="menu-mobile-line"></div>
                            <div class="menu-mobile-line"></div>
                            <div class="menu-mobile-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="global-styles w-embed"></div>

        <main class="main">
            @yield('content')
            <div class="footer-wrap">
                <div class="footer">
                    <div class="container">
                        <div class="footer-padding">
                            <a href="index.html" aria-current="page"
                                class="footer-brand-link-block w-nav-brand w--current"><img
                                    src="https://assets.website-files.com/plugins/Basic/assets/placeholder.60f9b1840c.svg"
                                    loading="lazy" alt="" class="logo-image-default" />
                                <div class="brand-logo-block">
                                    <p class="brand-name">Mancino ecommerce</p>
                                </div>
                            </a>
                            <link rel="prefetch" href="index.html" />
                            <div class="footer-links-flex">
                                <a href="index.html" aria-current="page"
                                    class="footer-link-large w--current">Home</a><a href="services.html"
                                    class="footer-link-large">Services</a><a href="categories-1.html"
                                    class="footer-link-large">Categories</a>
                                <a href="categories-1.html" class="footer-link-large">Product</a>
                                <a href="categories-1.html" class="footer-link-large">Contact</a>
                                <a href="categories-1.html" class="footer-link-large">About</a>
                            </div>

                            <div class="footer-socials-2 w-dyn-list">
                                <div role="list" class="socials-1-list w-dyn-items">
                                    <div role="listitem" class="social-1-item w-dyn-item">
                                        <a aria-label="Social Button" href="social/twitter.html"
                                            class="social-1-link-block w-inline-block"><img
                                                src="https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acad01e55e17f1_twitter-logo-white.svg"
                                                loading="lazy" alt="Twitter" class="social-icon" />
                                            <div class="social-link-circle is-2nd"></div>
                                        </a>
                                    </div>
                                    <div role="listitem" class="social-1-item w-dyn-item">
                                        <a aria-label="Social Button" href="social/facebook.html"
                                            class="social-1-link-block w-inline-block"><img
                                                src="https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acad094d5e181b_facebook-logo-white.svg"
                                                loading="lazy" alt="Facebook" class="social-icon" />
                                            <div class="social-link-circle is-2nd"></div>
                                        </a>
                                    </div>
                                    <div role="listitem" class="social-1-item w-dyn-item">
                                        <a aria-label="Social Button" href="social/linkedin.html"
                                            class="social-1-link-block w-inline-block"><img
                                                src="https://assets.website-files.com/63bab3c727acad1be85e17ec/63bab3c727acade6545e1892_linkedin-logo-white.svg"
                                                loading="lazy" alt="LinkedIn" class="social-icon" />
                                            <div class="social-link-circle is-2nd"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="footer-open-menu-link w-inline-block"><img
                            src="https://assets.website-files.com/63bab3c727acad36f05e17b8/63bab3c727acad198f5e190e_menu-burger-icon-purple-1.svg"
                            loading="lazy" alt="" class="footer-open-menu-link-icon" />
                        <p class="footer-open-menu-link-text">discover the menu</p>
                        <div class="footer-open-menu-link-bg"></div>
                        <div class="elipse-bg-footer">
                            <div class="elipse-bg-footer is-2nd"></div>
                            <div class="elipse-bg-footer is-3rd"></div>
                        </div>
                        <div class="elipse-bg-footer is-4th">
                            <div class="elipse-bg-footer is-2nd">
                            </div>
                            <div class="elipse-bg-footer is-3rd">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="subfooter-1-black">
                    <div class="container is-full-width">
                        <div class="subfooter-links">
                            <div class="subfooter-links-wrap w-dyn-list">
                                <div role="list" class="subfooter-links-list w-dyn-items">
                                    <div role="listitem" class="subfooter-link-item w-dyn-item">
                                        <a href="information/changelog.html" class="footer-link is-2nd">Changelog</a>
                                    </div>
                                    <div role="listitem" class="subfooter-link-item w-dyn-item">
                                        <a href="information/instructions.html"
                                            class="footer-link is-2nd">Instructions</a>
                                    </div>
                                    <div role="listitem" class="subfooter-link-item w-dyn-item">
                                        <a href="information/licencing.html" class="footer-link is-2nd">Licencing</a>
                                    </div>
                                    <div role="listitem" class="subfooter-link-item w-dyn-item">
                                        <a href="information/sample-page.html" class="footer-link is-2nd">Sample
                                            page</a>
                                    </div>
                                </div>
                            </div>
                            <div class="subfooter-dot"></div>
                            <div class="subfooter-links-list">
                                <a href="https://webflow.com/" target="_blank" class="footer-link is-2nd">Powered
                                    by Webflow</a><a href="https://www.metrik.studio/" target="_blank"
                                    class="footer-link is-2nd">Made by Metrik</a><a
                                    href="https://www.metrik.studio/webflow-templates" target="_blank"
                                    class="footer-link is-2nd">Webflow templates</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="../d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c83075.js?site=63bab3c727acad36f05e17b8"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="{{ URL::asset('ecommerce/js/webflow.db99c31af.js') }}" type="text/javascript"></script>
    <script>
        window.addEventListener('scroll', function() {
            var image = document.getElementById('parallaxImage');
            var scrollPosition = window.pageYOffset;

            // تعيين الحدود للحركة
            var maxOffset = 200; // يمكن تغيير هذا الرقم لضبط الحد الأقصى للحركة
            var offset = scrollPosition * 0.5; // تعديل سرعة الحركة

            // تأكد من أن الحركة لا تتجاوز الحدود المعينة
            if (offset > maxOffset) {
                offset = maxOffset;
            } else if (offset < -maxOffset) {
                offset = -maxOffset;
            }

            image.style.transform = 'translate3d(2px, ' + offset + 'px, 2px)';
        });
    </script>



    <script>
        document.addEventListener('scroll', function(e) {
            var speed = window.pageYOffset / 100;
            var animationDuration = Math.max(2 - speed, 1); // تأكد من ألا تكون القيمة أقل من 1 ثانية
            document.querySelector('.elipse-container').style.animationDuration = animationDuration + 's';
        });


        document.addEventListener('scroll', function(e) {
            var speed = window.pageYOffset / 100;
            var animationDuration = Math.max(1 - speed, 0.5); // تأكد من ألا تكون القيمة أقل من 0.5 ثانية
            document.querySelector('.elipse-container').style.animationDuration = animationDuration + 's';
        });

        document.getElementById('number-animation').addEventListener('mouseover', function() {
            this.style.opacity = '0';
        });

        document.getElementById('number-animation').addEventListener('mouseout', function() {
            this.style.opacity = '1';
        });
    </script>
</body>


</html>
