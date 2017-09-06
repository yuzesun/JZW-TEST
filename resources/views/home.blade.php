@extends('layouts.app')

@section('content')


<body class="w3-white">


<header class="w3-display-container w3-content w3-wide" style="max-width:1700px;" id="home">
    <img class="w3-image" src={{asset('/images/homepage_factory_2.jpg')}} alt="Architecture" width="100%">
    <div class="w3-display-topleft w3-text-white animated fadeInLeft w3-hide-small" style="padding:120px 180px">
        <p8>JZW International Development, LLC.</p8>
    </div>
    <div class="w3-display-topleft w3-text-white animated fadeInRight w3-hide-small" style="padding:190px 180px">
        <p9>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Best competitor for Building Materials</p9>
    </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1100px">


    <div class="container w3-hide-large w3-hide-medium" id="track_order">
        <br><br><br><br>
        <h5 class="text-center">Track an Order</h5>
        <br>
        {{Form::open(['method'=> 'GET', 'action' => 'OrderController@searchGeneralOrder']) }}
        {{Form::input('text','q', null, ['placeholder' => 'Purchase order number...','class'=>'w3-bar-item w3-input w3-border form-control w3-center', 'autocomplete'=>'off'])}}
        {{Form::close() }}
    </div>

<!-- Product Section -->
<div class="w3-container w3-padding-32" id="products">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="font-size: 39px;">Products</h3><br>
    <div class="w3-center">
        <p10>JZW Offers varies roofing products, such as Coil Nails, Plastic Caps, Hand Nails, and Strip Nails. Since we are
            so focusing on the Roofing Products, we can always offer the best quality goods and services to customers with
            the most competitive price. Below are the most popular products we offer to customers.
        </p10>
    </div>

    <div class="w3-row-padding">
        <div class="w3-half w3-margin-bottom">
            <img class="w3-round" src={{asset('/images/coil_nailss.jpg')}} alt="Coil_Nail" style="width:100%">
            <div class="w3-container w3-white">
                <h3>EG Coil Roofing Nails</h3>
                <p class="w3-opacity">3/4" Coil Roofing Nails E.G. 7200/BOX. (64 BOXES / PALLET)</p>
                <p class="w3-opacity">7/8" Coil Roofing Nails E.G. 7200/BOX. (64 BOXES / PALLET)</p>
                <p class="w3-opacity">1" Coil Roofing Nails E.G. 7200/BOX. (64 BOXES / PALLET)</p>
                <p class="w3-opacity">1-1/4" Coil Roofing Nails E.G. 7200/BOX. (64 BOXES / PALLET)</p>
                <p class="w3-opacity">1-1/2" Coil Roofing Nails E.G. 7200/BOX. (64 BOXES / PALLET)</p>
                <p class="w3-opacity">1-3/4" Coil Roofing Nails E.G. 7200/BOX. (64 BOXES / PALLET)</p>
            </div>
        </div>
        <div class="w3-half w3-margin-bottom">
            <img class="w3-round" src={{asset('/images/plastic_cap.jpeg')}} alt="Plastic_Cap" style="width:100% ; height:100%">
            <div class="w3-container w3-white">
                <h3>Plastic Cap Nails</h3>
                <p class="w3-opacity">1" Plastic Cap Nails Button Red Caps 2000/BOX</p>
                <p class="w3-opacity">1-1/4" Plastic Cap Nails Button Red Caps 2000/BOX</p>
                <p class="w3-opacity">1" Plastic Cap Nails Button Red Caps 3000/BUCKET</p>
                <p class="w3-opacity">1-1/4" Plastic Cap Nails Button Red Caps 2500/BUCKET</p>
                <p class="w3-opacity">7/8" Plastic Cap Nails Button Red Caps 2000/BOX</p>
                <p class="w3-opacity">7/8" Plastic Cap Nails Button Red Caps 3000/BUCKET</p>
                {{--<p>Each size comes with a different case. For example, 1-1/4" is 2500Pcs/Bucket; 1"--}}
                    {{--is 2000Pcs/Box; and 1" is 3000Pcs/Bucket. The variable cases provide flexibility for customers'--}}
                    {{--needs.</p>--}}
            {{--</div>--}}
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="w3-container w3-padding-32" id="services">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="font-size: 39px;">Services</h3>
    </div>

    <img class="w3-round" src={{asset('/images/hd1.jpg')}} alt="Coil_Nail" style="width:100%">

    <div class="w3-center"><br>
        <h3><p1>Forwarder</p1></h3>
        <p10>JZW Handles shipment services which allows us to provide the best service to customers. Shipping processes
            are handled by JZW Specialists, who are experienced with ISF Filling and Entry Summary reports.
        </p10>
        <h3><p1>Manufacturer</p1></h3>
        <p10>JZW provides hundreds of resources to produce certain goods with reliable quality.
        </p10>
        <h3><p1>Broker</p1></h3>
        <p10>As a licensed broker, JZW offers shipping services with efficient routes and affordable prices, and
            contracted with tens of vessel companies.
        </p10>
    </div>

    <!-- Contact Section -->
    <div class="w3-container w3-padding-32" id="contact">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="font-size: 39px;">Contact Us</h3>
        <br>
        <div class="w3-white">
            <div class="w3-half">
                <!-- Add Google Maps -->
                <div id="googleMap" style="width:100%;height:400px;"></div>
            </div>
            <div class="w3-half">
                <div class="container">
                    <br><br>
                <h3><p1>JZW International Development LLC.</p1></h3>
                <br><br>
                <p1><strong>Location:</strong> 4245 S. 143rd Circle, Suite #5, Omaha, NE 68137</p1>
                <br><br>
                <p1><strong>Telephone:</strong> (402) 933-8876</p1>
                <br><br>
                <p1><strong>Fax:</strong> (402) 933-8879</p1>
                <br><br>
                <p1><strong>Email:</strong> jzwinternational@gmail.com</p1>
                <br><br>
                <p1><strong>Operation Hours:</strong> Mon - Fri 9:00 AM - 4:30 PM (CT)</p1>
                <br><br>
                </div>
            </div>

            <div class="w3-row-padding">
                <br><br><br>
                <div class="w3-third l3 m6 w3-margin-bottom">
                    <h3>Jennifer Zhang</h3>
                    <p class="w3-opacity">CEO & Founder</p>
                    <p>Cell: (402) 719-6969</p>
                    <p>Email: jenniferzhang@jzwinternational.com</p>
                </div>
                <div class="w3-third l3 m6 w3-margin-bottom">
                    <h3>Yanling Ma</h3>
                    <p class="w3-opacity">Director of Operation</p>
                    <p>Cell: (402) 719-6969</p>
                    <p>Email: yanlingma@jzwinternational.com</p>
                </div>
                <div class="w3-third l3 m6 w3-margin-bottom">
                    <h3>Yuze Sun</h3>
                    <p class="w3-opacity">Project Manager</p>
                    <p>Cell: (402) 630-8515</p>
                    <p>Email: yuzesun@jzwinternational.com</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w3-container w3-padding-32" id="about">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="font-size: 39px;">About Us</h3>
        <div  class="w3-white w3-padding" style="line-height:200%">
            <p1>JZW International facilitates international business opportunities between the United States
                and Chinese companies. JZW team is very experienced in international trading, marketing, consulting
                and purchasing business. The multi-lingual language skills, multi-cultural backgrounds, over ten years
                of international business experience and the network of contacts with various Chinese manufacturers and
                government officials are invaluable to American companies who wish to establish international trade
                relationships in China. JZW concentrates on two primary lines of business:</p1>
            <h3><p1>Construction Fasteners</p1></h3>
            <p1>Since approximately 85% of the fasteners used in steep slope roofing applications as well as fasteners
                used in many other American construction trades are manufactured in China, brokerage and produce
                of all types of quality construction fasteners became JZW's primary emphasis. Roofing coil nails and
                dry wall screws have become our flagship products. We are able to provide the highest products in
                container quantity delivered to your door, or to your customer with very quick lead times and
                competitive pricing.</p1>
            <h3><p1>Business Consulting</p1></h3>
            <p1>We provide International Business Consulting services for companies who are looking for establish a
                business in China or doing business between US and China.Using our company's skills will save you
                countless hours of legwork and wasted time as well as help you avoid culture misunderstandings that
                often occur when East meets West.</p1>
        </div>
    </div>
    <!-- End page content -->
</div>

</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
    <p>© 2008-2017 JZW International Development, LLC. All Rights Reserved</p>
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

<script>
    function myMap()
    {
        myCenter=new google.maps.LatLng(41.217402, -96.136734);
        var mapOptions= {
            center:myCenter,
            zoom:12, scrollwheel: false, draggable: false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

        var marker = new google.maps.Marker({
            position: myCenter,
        });
        marker.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvBsI3pGDQ41Gwfzh210tJsqzECwlHnuA&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
</body>
@endsection
