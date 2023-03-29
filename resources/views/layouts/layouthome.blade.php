@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="VIJAY THAPA" />
        <meta name="description" content="                                   Cloud kitchen specializes in sharg al nile" />
        <meta name="keywords" content="Give Your Keywords for SEO" />
        
        <title>Cloud kitchen specializes in sharg al nile</title>
        <!--ADING CSS HERE-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>
    
    <body>
        <!--Header Starts HERE-->
        <header class="header">
            <div class="wrapper">
                <h1>                                   Cloud kitchen specializes in sharg al nile</h1>
            </div>
            
        </header>
        <!--Header Ends HERE-->
        
        <!--Menu Starts HERE-->
        <nav class="menu">
            <div class="wrapper">
                <ul>
                    <a href=><li>Home</li></a>
                    <a href="index.html"><li>Restaurant</li></a>
                    <a href="about.html"><li> manager</li></a>
                    <a href="#"><li>Search</li></a>
                    <a href="contact.html"><li>Customer</li></a>
                    <a href="login.html"><li>Services</li></a>
                </ul>
            </div>
        </nav>
        <!--Menu Ends HERE-->
        
        <!--Main Body Starts HERE-->
        <div class="main">
            <div class="wrapper">
                
                
                @yield('home')

  @yield('content')
                
            </div>
        </div>
        <!--Main Body Ends HERE-->
        
        <!--Footer Starts HERE-->
        <footer class="footer">
            <div class="wrapper">
                <p>&copy; <a href="#">Cloud kitchen specializes in sharg al nile</a>. All rights reserved 2023.</p>
            </div>
        </footer>
        <!--Footer Ends HERE-->
    </body>
</html>
@endsection