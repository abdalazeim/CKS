@extends('layouts.app')

@section('content')
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="VIJAY THAPA" />
        <meta name="description" content="Cloud kitchen specializes" />
        <meta name="keywords" content="Give Your Keywords for SEO" />
        
        <title>Cloud kitchen specializes in sharg al nile</title>
        <!--ADING CSS HERE-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        
        <!--Resource Files for Slider-->
        <!-- Start WOWSlider.com HEAD section -->
        <link rel="stylesheet" type="text/css" href="assets/slider/engine1/style.css" />
        <script type="text/javascript" src="assets/slider/engine1/jquery.js"></script>
        <!-- End WOWSlider.com HEAD section -->
    </head>
    
    <body>
        <!--Header Starts HERE-->
        <header class="header">
            <div class="wrapper">
                <h1>Cloud kitchen specializes in sharg al nile</h1>
            </div>
            
        </header>
        <!--Header Ends HERE-->
        
        <!--Menu Starts HERE-->
        <nav class="menu">
            <div class="wrapper">
                <ul>

                    <a href="{{ route('projects.index') }}"><li>Restaurant</li></a>
                    <a href="about.html"><li> manager</li></a>
                    <a href="#"><li>Search</li></a>
                    <a href="{{ route('specs.index') }}"><li>Customer</li></a>
                    <a href="login.html"><li>Services</li></a>
                </ul>
            </div>
        </nav>
        <!--Menu Ends HERE-->
        
        <!--SLIDER STARTS HERE-->
        <div class="slider">
            <div class="wrapper">
                <!-- Start WOWSlider.com BODY section -->
                <div id="wowslider-container1">
                <div class="ws_images"><ul>
                		<li><img src="assets/slider/data1/images/house03.jpg" alt="House Rental System" title="Cloud kitchen specializes" id="wows1_0"/></li>
                		<li><a href="http://wowslider.net"><img src="assets/slider/data1/images/pexelsphoto186077.jpg" alt="jquery carousel" title="Luxury Houses for Rent" id="wows1_1"/></a></li>
                		<li><img src="assets/slider/data1/images/39f6e0639465c7e01eaa79e26ada2a48.jpg" alt="Rent Houses at Affordable Price" title="Rent Houses at Affordable Price" id="wows1_2"/></li>
                	</ul></div>
                	<div class="ws_bullets"><div>
                		<a href="#" title="Cloud kitchen specializes"><span><img src="assets/slider/data1/tooltips/house03.jpg" alt="Cloud kitchen specializes"/>1</span></a>
                		<a href="#" title="Luxury Houses for Rent"><span><img src="assets/slider/data1/tooltips/pexelsphoto186077.jpg" alt="Luxury Houses for Rent"/>2</span></a>
                		<a href="#" title="Rent Houses at Affordable Price"><span><img src="assets/slider/data1/tooltips/39f6e0639465c7e01eaa79e26ada2a48.jpg" alt="Rent Houses at Affordable Price"/>3</span></a>
                	</div></div>
                <div class="ws_shadow"></div>
                </div>	
                <script type="text/javascript" src="assets/slider/engine1/wowslider.js"></script>
                <script type="text/javascript" src="assets/slider/engine1/script.js"></script>
                <!-- End WOWSlider.com BODY section -->
            </div>
        </div>
        <!--SLIDER ENDS HERE-->
        
        <!--Main Body Starts HERE-->
        <div class="main">
            <div class="wrapper">
                <h3>Active Restaurants</h3>
                
                <!--Displaying Recently Added Houses in Boxes-->
                <div class="clearfix">
                    
                    <div class="houses">
                        <img src="images/house.jpg" />
                        <span class="house-title">Som Bahadur House</span><br />
                        <span class="house-added">Added Date:01-03-2017</span><br />
                        <span class="house-location">Location: Sano Thimi, Bhaltapur Nepal</span><br />
                        <a href="book.html">
                            <button type="button" class="btn-book" >Book House</button>
                        </a>
                    </div>
                    
                    <div class="houses">
                        <img src="images/house.jpg" />
                        <span class="house-title">Ram Bahadur House</span><br />
                        <span class="house-added">Added Date:01-03-2017</span><br />
                        <span class="house-location">Location: Sano Thimi, Bhaltapur Nepal</span><br />
                        <button type="button" class="btn-book" >Book House</button>
                    </div>
                    
                    <div class="houses">
                        <img src="images/house.jpg" />
                        <span class="house-title">Shyam Bahadur House</span><br />
                        <span class="house-added">Added Date:01-03-2017</span><br />
                        <span class="house-location">Location: Sano Thimi, Bhaltapur Nepal</span><br />
                        <button type="button" class="btn-book" >Book House</button>
                    </div>
                    
                    <div class="houses">
                        <img src="images/house.jpg" />
                        <span class="house-title">Hari Bahadur House</span><br />
                        <span class="house-added">Added Date:01-03-2017</span><br />
                        <span class="house-location">Location: Sano Thimi, Bhaltapur Nepal</span><br />
                        <button type="button" class="btn-book" >Book House</button>
                    </div>
                    <div class="houses">
                        <img src="images/house.jpg" />
                        <span class="house-title">Kumari Bahadur House</span><br />
                        <span class="house-added">Added Date:01-03-2017</span><br />
                        <span class="house-location">Location: Sano Thimi, Bhaltapur Nepal</span><br />
                        <button type="button" class="btn-book" >Book House</button>
                    </div>
                    
                </div>
                
                <h3>Best Restaurants </h3>
                <!--Displaying Luxurious Houses in Boxes-->
                <div class="clearfix">
                    
                    <div class="houses">
                        <img src="images/house.jpg" />
                        <span class="house-title">Som Bahadur House</span><br />
                        <span class="house-added">Added Date:01-03-2017</span><br />
                        <span class="house-location">Location: Sano Thimi, Bhaltapur Nepal</span><br />
                        <button type="button" class="btn-book" >Book House</button>
                    </div>
                    
                    <div class="houses">
                        <img src="images/house.jpg" />
                        <span class="house-title">Ram Bahadur House</span><br />
                        <span class="house-added">Added Date:01-03-2017</span><br />
                        <span class="house-location">Location: Sano Thimi, Bhaltapur Nepal</span><br />
                        <button type="button" class="btn-book" >Book House</button>
                    </div>
                    
                    
                    <div class="houses">
                        <img src="images/house.jpg" />
                        <span class="house-title">Shyam Bahadur House</span><br />
                        <span class="house-added">Added Date:01-03-2017</span><br />
                        <span class="house-location">Location: Sano Thimi, Bhaltapur Nepal</span><br />
                        <button type="button" class="btn-book" >Book House</button>
                    </div>
                    
                    <div class="houses">
                        <img src="images/house.jpg" />
                        <span class="house-title">Hari Bahadur House</span><br />
                        <span class="house-added">Added Date:01-03-2017</span><br />
                        <span class="house-location">Location: Sano Thimi, Bhaltapur Nepal</span><br />
                        <button type="button" class="btn-book" >Book House</button>
                    </div>
                    <div class="houses">
                        <img src="images/house.jpg" />
                        <span class="house-title">Kumari Bahadur House</span><br />
                        <span class="house-added">Added Date:01-03-2017</span><br />
                        <span class="house-location">Location: Sano Thimi, Bhaltapur Nepal</span><br />
                        <button type="button" class="btn-book" >Book House</button>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--Main Body Ends HERE-->
        
        <!--Footer Starts HERE-->
        <footer class="footer">
            <div class="wrapper">
                <p>&copy; <a href="#">Cloud kitchen specializes</a>. All rights reserved 2023.</p>
            </div>
        </footer>
        <!--Footer Ends HERE-->
    </body>
</html>
@endsection
