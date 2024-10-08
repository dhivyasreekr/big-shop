<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'Default Title')
    </title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/imgs/theme/favicon.svg') }}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/slider-range.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css?v=5.3') }}" />
</head>
<body>

    <!-- Include the Header partial -->
    @include('frontend.layout.header')

    <!-- Include the Topbar partial -->
    @include('frontend.layout.topbar')

    <main class="main">

    @if (
        Request::is('login') || 
        Request::is('register') || 
        Request::is('forget_password') || 
        Request::is('reset_password') || 
        Request::is('account') || 
        Request::is('wishlist') ||
        Request::is('privacy_policy') || 
        Request::is('page_terms') || 
        Request::is('error') ||
        Request::is('purchase_guide') ||
        Request::is('about') ||
        Request::routeIs('product.show') ||
        Request::routeIs('cart.index') ||
        Request::is('checkout') ||
        Request::routeIs('order.place_an_order') ||
        Request::routeIs('order.confirmation') ||
        Request::routeIs('invoice.show') 
    )    

        @yield('content')

        @elseif (
            request()->query('category')
        )    

        @yield('content')

    @elseif(Request::is('/'))

        <!-- Include the slider partial -->
        @include('frontend.slider.type1')

        <!-- Include the feature categories slider partial -->
        @include('frontend.slider.feature_categories.type1')

        <!-- Include the banner slider partial -->
        @include('frontend.slider.banner.type1')

        <!-- Include the popular product slider partial -->
        @include('frontend.slider.popular_product.type1')

        <!-- Include the daily best sells slider partial -->
        @include('frontend.slider.daily_best_sells.type1')

        <!-- Include the deal of the day slider partial -->
        @include('frontend.slider.deal_of_the_day.type1')

        <section class="section-padding mb-30">
            <div class="container">
                <div class="row">
                    <!-- Include the top_selling slider partial -->
                    @include('frontend.slider.top_selling.type1')

                    <!-- Include the trending_products slider partial -->
                    @include('frontend.slider.trending_products.type1')

                    <!-- Include the top_rated slider partial -->
                    @include('frontend.slider.top_rated.type1')

                    <!-- Include the recently_added slider partial -->
                    @include('frontend.slider.recently_added.type1')
                </div>
            </div>
        </section>
        <!--End 4 columns-->

    @else

        @yield('content')

    @endif

    </main>

    <!-- Include the Footer partial -->
    @include('frontend.layout.footer')

    <!-- Include the preloader partial -->
    @include('frontend.preloader.type1')

    <!-- Vendor JS-->
    <script src="{{ asset('frontend/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/slider-range.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.elevatezoom.js') }}"></script>
    <!-- Template JS -->
    <script src="{{ asset('frontend/js/main.js?v=5.3') }}"></script>
    <script src="{{ asset('frontend/js/shop.js?v=5.3') }}"></script>

    <!-- jQuery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function() {
            console.log("doc ready");
            
            // Category Search Event
            // Set the selected option value (example: setting it to '2')
            // $('#category').val('5'); // This sets the dropdown to 'Category 2'

            $('#category').change(function() {
                var selectedValue = $(this).val();
                console.log("Selected Category ID: " + selectedValue);

                // Optionally submit the form if needed
                // Submit the form when the dropdown value changes
                $(this).closest('form').submit();
                
            });

            // Location Searh Event
            // $('#location').val('5');
            
            $('#location').change(function() {
                
                var selectedValue = $(this).val();
                console.log("Selected location ID: " + selectedValue);

                // Optionally submit the form if needed
                // Submit the form when the dropdown value changes
                $(this).closest('form').submit();
                
            });

            // Price Range Slider
            // Initialize the slider
            // var to = 600;
            $("#slider-range").slider({
                range: true,
                min: 0, // Set the minimum value
                max: 1000, // Set the maximum value
                values: [0, 1000], // Initial values
                slide: function(event, ui) {
                    // Update the displayed values on slide
                    $("#slider-range-value1").text(ui.values[0]);
                    $("#slider-range-value2").text(ui.values[1]);
                }
            });

            // Display the initial values
            $("#slider-range-value1").text($("#slider-range").slider("values", 0));
            $("#slider-range-value2").text($("#slider-range").slider("values", 1));
        });
    </script>
</body>
</html>
