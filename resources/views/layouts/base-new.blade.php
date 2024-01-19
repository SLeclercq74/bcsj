<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCSJ</title>
   <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">

    <link href="{{ url('css/new.css') }}" rel="stylesheet">
    <link href="{{ url('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/font-awesome/css/all.css') }}" rel="stylesheet">

    <script src="{{ url('js/jquery.min.js') }}""></script>
    <script src="{{ url('js/popper.min.js') }}""></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.5/iframeResizer.min.js"></script>

    <script type="text/javascript" src="//www.freeprivacypolicy.com/public/cookie-consent/4.0.0/cookie-consent.js"
        charset="UTF-8"></script>
    <script type="text/javascript" charset="UTF-8">
        document.addEventListener('DOMContentLoaded', function() {
            cookieconsent.run({
                "notice_banner_type": "simple",
                "consent_type": "implied",
                "palette": "light",
                "language": "fr",
                "page_load_consent_levels": ["strictly-necessary", "functionality", "tracking", "targeting"],
                "notice_banner_reject_button_hide": false,
                "preferences_center_close_button_hide": false,
                "page_refresh_confirmation_buttons": false
            });
        });
    </script>

    <noscript>Cookie Consent by <a href="https://www.freeprivacypolicy.com/" rel="noopener">Free Privacy Policy
            Generator</a></noscript>

</head>

<body>
    <header class="header">
        <div class="d-none d-md-block">
            @include('partials.new.navbar')
        </div>
        <div class="d-md-none">
            @include('partials.navbar')
        </div>
    </header>
        <section class="container">
            <article>
                @yield('body')
            </article>
        </section>
        @include('partials.footer')
        <script gwd-served-sizes="">
            ["1980x250"]
        </script>
        <script type="text/javascript" id="gwd-init-code">
            (function() {
                var gwdAd = document.getElementById('gwd-ad');

                function handleDomContentLoaded(event) {

                }

                function handleWebComponentsReady(event) {
                    // Start the Ad lifecycle.
                    setTimeout(function() {
                        gwdAd.initAd();
                    }, 0);
                }

                function handleAdInitialized(event) {}

                window.addEventListener('DOMContentLoaded',
                    handleDomContentLoaded, false);
                window.addEventListener('WebComponentsReady',
                    handleWebComponentsReady, false);
                window.addEventListener('adinitialized',
                    handleAdInitialized, false);
            })();
        </script>
        @yield('script')
</body>

</html>
