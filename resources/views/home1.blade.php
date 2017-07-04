@extends('layouts.test')

@section('content')

<body class="w3-light-grey">

<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <img class="w3-image" src={{asset('/images/hd1.jpg')}} alt="Architecture" width="1500" height="800">

</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1100px">

    <!-- Services Section -->
    <div class="w3-container w3-padding-32" id="services">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="font-size: 39px;">Services</h3>
    </div>

    <div class="w3-content" style="max-width:1100px">

        <!-- Consulting Section -->
        <div class="w3-row w3-padding-12" id="consulting">
            <div class="w3-col m6 w3-padding-large">
                <br>
                <img class="w3-round w3-image w3-opacity-min" src={{asset('/images/consulting.jpg')}} alt="Consulting" width="500" height="750">
            </div>

            <div class="w3-col m6 w3-padding-large">
                <br>
                <h2 class="w3-center">Consulting</h2>
                <p class="w3-justify">The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet,
                    consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.We only use seasonal ingredients.</p>
            </div>
        </div>

        <!-- Manufacturer Section -->
        <div class="w3-row w3-padding-12" id="manufacturer">

            <div class="w3-col m6 w3-padding-large">
                <br>
                <img class="w3-round w3-image w3-opacity-min" src={{asset('/images/manufacturing.jpg')}}  alt="Manufacturer" width="500" height="680">
            </div>

            <div class="w3-col l6 w3-padding-large">
                <br><br>
                <h2 class="w3-center" >Manufacturing</h2>
                <p class="w3-justify">The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet,
                    consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.We only use seasonal ingredients.</p>
            </div>

        </div>


        <!-- Shipping Section -->

        <div class="w3-row w3-padding-12" id="#">
            <div class="w3-col m6 w3-padding-large">
                <br>
                <img class="w3-round w3-image w3-opacity-min" src={{asset('/images/shipping.jpg')}}  alt="Shipping" width="500" height="750">
            </div>

            <div class="w3-col m6 w3-padding-large">
                <br><br>
                <h2 class="w3-center">Shipping</h2>
                <p class="w3-justify">The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet,
                    consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.We only use seasonal ingredients.</p>
            </div>
        </div>


        <div class="w3-row w3-padding-12" id="quality_review">

            <div class="w3-col l6 w3-padding-large">
                <br>
                <img class="w3-round w3-image w3-opacity-min" src={{asset('/images/quality.jpg')}}  alt="Manufacturer" width="500" height="750">
            </div>

            <div class="w3-col l6 w3-padding-large">
                <br><br><br>
                <h2 class="w3-center">Quality Review</h2>
                <p class="w3-justify">The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet,
                    consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.We only use seasonal ingredients.</p>
            </div>

        </div>
    </div>

    <!-- Product Section -->
    <div class="w3-container w3-padding-32" id="products">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="font-size: 39px;">Products</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.
        </p>

        <div class="w3-row-padding">
            <div class="w3-half w3-margin-bottom">
                <img class="w3-round" src={{asset('/images/coil_nail.jpg')}} alt="Coil_Nail" style="width:100%">
                <div class="w3-container w3-white">
                    <h3>West Coast, Norway</h3>
                    <p class="w3-opacity">Roundtrip from $79</p>
                    <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                    <button class="w3-button w3-margin-bottom">Buy Tickets</button>
                </div>
            </div>
            <div class="w3-half w3-margin-bottom">
                <img class="w3-round" src={{asset('/images/plastic_cap.jpg')}} alt="Plastic_Cap" style="width:100%">
                <div class="w3-container w3-white">
                    <h3>Mountains, Austria</h3>
                    <p class="w3-opacity">One-way from $39</p>
                    <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                    <button class="w3-button w3-margin-bottom">Buy Tickets</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="w3-container w3-padding-32" id="about">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="font-size: 39px;">About</h3>
        <p>Lets get in touch and talk about your and our next project.</p>
        <div class="w3-row-padding w3-grayscale">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <img src="/w3images/team2.jpg" alt="John" style="width:100%">
                <h3>John Doe</h3>
                <p class="w3-opacity">CEO & Founder</p>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
                <h3>Jane Doe</h3>
                <p class="w3-opacity">Architect</p>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
                <h3>Mike Ross</h3>
                <p class="w3-opacity">Architect</p>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
                <h3>Dan Star</h3>
                <p class="w3-opacity">Architect</p>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
            </div>
        </div>
    </div>

    <!-- End page content -->
</div>

<!-- Google Map -->
<div id="googleMap" class="w3-grayscale" style="width:100%;height:450px;"></div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

@yield('content')

<script>

    function w3_open() {
        document.getElementById("navDemo").style.display = "block";
    }

    function w3_close() {
        document.getElementById("navDemo").style.display = "none";
    }

</script>

<!-- Add Google Maps -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
</body>
@endsection
