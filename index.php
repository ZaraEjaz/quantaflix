<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Quantaflix</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            width: 100%;
            height: 100%;
            padding: 0px;
            margin:0px;
            overflow-x: hidden;
        }

        .navbar {
            height: auto;
            background-color: white;
            /* Set background color to white */
        }

        .navbar-collapse {
            justify-content: center;
        }

        .navbar-toggler,
        .nav-link {
            font-size: 18px;
            color: black;
            padding: 20px;
            padding: 30px;
        }

        .navbar-brand {
            font-size: 25px;
            color: black;
            padding: 20px;
            padding: 30px;
        }

        /*Testinomials CSS*/
        .testimonialscontainer {
            max-width: auto;
            width: auto;
        }

        .checked {
            color: orange;
            height: 10%;
            padding-left: 0;
            padding-top: 12px;
        }

        .waitlistform {
            background-color: white;
            border-radius: 20px;
            border: 2px solid whitesmoke;
            max-width: 90%;
            width: 550px;
            padding: 20px;

        }

        .form-control {
            height: 50px;
            background-color: rgb(235, 235, 235);
            border: none;
        }

        .arrowimage {
            width: 5%;
            margin-left: 15px;
        }

        .testimonialspara {
            font-size: larger;
        }

        .profile1 {
            width: 90px;
            /* Adjust width as needed */
            object-fit: cover;

        }

        .image-stack {
            position: relative;
            padding: 6px;
        }

        .profile-img {
            width: 3%;
            transition: opacity 0.3s ease-in-out;
        }

        .profile-img:hover {
            transform: translateY(-20px);
            transition: transform 0.9s ease-out;
        }

        .profile1,
        .profile2,
        .profile3 {
            margin-right: -15px;

        }

        .profile4 {
            margin-right: 0;
        }

        .ratingimage {
            width: 10%;
            height: 10%;
            padding-left: 0;
            padding-top: 12px;

        }

        .joinlistbtn,
        .joinlistbtn:hover {
            background-color: rgb(165, 48, 233);
            color: white;
            width: 100%;
        }

        .start {
            background-color: rgb(200, 240, 90);
            width: 30%;
            height: 38px;
            border-radius: 20px;
            padding-left: 3px;
            padding-top: 6px;
        }

        .starting1 {
            background-color: rgb(119, 241, 71);
            width: 15%;
            height: 34px;
            border-radius: 20px;
            padding: 8px;
        }

        /* Benefits CSS */
        .box {
            display: flex;
            flex-wrap: nowrap;
            justify-content: start;
            margin: 0 -90px;
            width: auto;
        }

        .box>div {
            background-color: rgb(173, 255, 47);
            border-radius: 15px;
            margin: 10px;
            padding: 30px 30px;
            width: 130%;
            text-align: start;
        }

        .fingerprintpic1 {
            width: 60px;
        }


        /* Products */
        .products-heading-1 {
            background-color: rgb(173, 255, 47);
            color: black;
            border-radius: 20px;
            padding: 5px 20px;
            width: 10%;
            margin-top: 40px;
        }

        .card-products {
            width: 90%;
            /* Adjust the width of the cards */
            background: rgb(235, 235, 235);
            height: 90%;
            border-radius: 20px;
            padding: 20px;
            border: none;
            margin: 20px auto;
            /* Center the cards horizontally */
            overflow: hidden;
        }

        .card-products .card-img-top {
            width: 100%;
            height: 80%;
            object-fit: cover;
            justify-content: center;
            border-radius: 40px;
            padding: 20px;
        }

        .main-heading-products {
            padding: 30px;
        }

        .container {
            padding-right: 0px;
            padding-left: 0px;
            width: 100%
        }

        .custom-card {
            background-color: rgb(173, 255, 47);
        }

        .card-text {
            color: gray;
            padding-bottom: 0px;
        }

        .small-product-cards {
            width: 450px;
            height: auto;
            border-radius: 30px;
        }

        .small-card-img {
            perspective: 100px;
            border-radius: 50px;
            padding: 10px;
            width: 80%;
            image-rendering: auto;
            image-rendering: pixelated;
        }

        .small-card-body {
            padding: 10px;
        }

        .small-card-container {
            max-width: 100%;
        }

        .matrices {
            border-right: 1px solid gray;
            font-size-adjust: 0.58;
        }

        .wrapper {
            max-height: 1000px;
            border: 1px none;
            display: flex;
            overflow-x: auto;
            margin-bottom: 10px;
        }

        .wrapper::-webkit-scrollbar {
            width: 0;
        }

        .wrapper .item {
            display: inline-block;
            padding: 5px;
            min-width: 80%;
            height: auto;
            line-height: auto;
            background-color: transparent;
            margin: 15px;
        }

        .slidecontainer {
            border-radius: 20px !important;
            overflow: hidden;
            padding: 0% !important;
        }

        .product-button {
            background-color: transparent;
            border-color: purple;
            color: purple;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 16px;
        }

        /* FAQ'S CSS */
        .card-header {
            border: none !important;
            background-color: rgb(220, 220, 220);
            border-radius: 20px;
        }

        .faq-card {
            
            width: 100%;
            max-width: 650px;
            color: black;
            margin-bottom: 2px;
            height: auto;
            max-height: 650px;
        }

        .faq-card-body {
            border: black;
            padding: 10px 27px;
            background-color: rgb(220, 220, 220) ;
        }

        .faq-btn {
            width: 100%;
            height: 40px;
            color: black;
            border: none;
            font-size: 20px;
            text-align: left;
            padding-left: 0%;
            position: relative;
            
        }

        .faq-btn:after {
            content: '\2716';
            width: 35px;
            font-size: 18px;
            right: 0%;
            top: 10px;
            position: absolute;
            transition: transform 0.5s ease;
            
        }

        .faq-btn:focus {
            box-shadow: none;
        }

        .faq-btn.collapsed:after {
            transform: rotate(45deg);

        }

        .mt-5
        .mb-5 {
            border-radius: 20px;
            overflow: hidden;
        }

        .footercontainer {
            border-radius: 20px !important;
            overflow: hidden;
            padding: 0% !important;
        }

        .col-md-5 img {
            width: 100%;
            height: 100%;
            border-radius: 0;
            object-fit: cover;
        }

        .faqs-card {
            width: 100%;
            height: 500px;
        }

        .img-fluid {
            height: 500px;
        }

        .faqs-card-body {
            background-color: rgb(177, 243, 24);
            height: 500px;
            padding: 200px 10px;
            width: 100%;

        }

        .websitetext,
        .question {
            color: black;
        }

        .websitetext:hover {
            color: rgb(65, 62, 62);
        }

        .websiteend {
            font-size: x-large;
        }

/* product Responsiveness */

        @media (max-width: 753px) {
            .navbar-collapse {
                justify-content: center;
            }

            .card-products {
                max-width: 100%;
            }

            .small-product-cards {
                width: 450px;
                height: auto;
                border-radius: 30px;
            }

            .small-card-img {
                width: 20%;
                border-radius: 40px;
                padding: 20px;
            }

            .small-card-body {
                padding: 10px;
            }
        }

        @media (max-width: 767.98px) {
            .slide-card .row {
                flex-direction: column-reverse;
            }
        }

        /*Responsiveness */
        @media (max-width: 992px) {
            .box {
                flex-wrap: wrap;
                justify-content: center;
            }

            .box>div {
                width: calc(70% - 20px);

            }


            .testimonialscontainer {
                width: 90%;
                margin: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            .testimonialsheading {
                text-align: center;
                font-size: 270%;
            }

            .testimonialspara {
                text-align: center;
            }

            body {
                overflow-x: hidden;
            }

            .start {
                width: 80%;
                padding: 6px;
            }

            .starting1 {
                width: auto;
                padding: 6px;
            }

            .profilecontainer {
                width: 80%;
                margin-right: 50%;
            }

            .profile-img {
                width: 10%;
                align-items: center;

            }

            .profile1 {
                margin-right: -10px;
                margin-left: 300px;
            }
            

            .profile2,
            .profile3,
            .profile4 {

                margin-right: -10px;
                margin-left: -20px;
            }

            .ratingimage {
                width: 30%;
                height: auto;
                margin-top: 5px;
                margin-left: 320px;
                /* Adjust margin-top as needed */
            }
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="#">
            <img src="https://framerusercontent.com/images/TBS0Me6nmNnsFHjb5ZwEyYzECk.png" width="40" height="40"
                class="d-inline-block align-top" alt="">Quantaflix</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCenteredExample"
            aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarCenteredExample">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#benefitscontainer">Benefits<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Products-container">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faqscontainer">FAQs</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" data-aos="fade-up" data-aos-duration="3000" style= "width: 100%">
        <!--Testimonials Setion-->
        <div id="testimonials" data-aos="fade-up" data-aos-duration="3000" margin-top="30%">
            <br><br><br><br><br><br>
            <div class="start mb-3 ">
                <h6 class="starting1" style="display: inline;"> Update</h6>
                <h6 style="display: inline; margin-left: 10px;">New Auto invoice mailing</h6>
                <img src="arrow-right-solid.svg" class="arrowimage" style="display: inline;">
            </div>
            <div class="d-flex justify-content-center">
                <div class="badge text-bg-primary text-wrap" style="width: 50rem;">
                    <h1 style="font-size: 60px;">Ease your mind on business operations.</h1>
                    <h5>From intuitive task management to advanced data analytics, our software equips you with the
                        tools you need to thrive in today's competitive business landscape.</h5>
                </div>
            </div>
        </div>
        
        </div>
    </div>

    <!--Wait list form-->
    <div class="form-container d-flex justify-content-center align-items-center">
        <form class="waitlistform " data-aos="fade-up" data-aos-duration="3000">
            <h3 class="text-center">Secure your spot now</h3>
            <h6 class="text-center mb-4">Be the first to know when the produt launches <br>and other not-to-miss
                updates.</h6>
            <div class="mb-3"><input type="text" name="personname" class="form-control" id="idname"
                    placeholder="Your name"></div>
            <div class="mb-4"><input type="email" name="emailaddress" class="form-control" id="idemail"
                    placeholder="Your email"></div>
            <div class="mb-3">
                <button type="submit" class="btn joinlistbtn"
                    style="border: none; border-radius: 10px; height: auto; padding: 10px; background-color: #BF00FF">Join
                    the Waitlist</button>
            </div>
            <div class="text-center mb-1">
                <h7 class="text-muted">By subscribing you agree with our <b><u> Terms of license</u></b></h7>
            </div>
        </form>
    </div>
    <br><br><br><br><br><br>
    <!--benefits Setion-->
    <div class="container" id="benefitscontainer">
        <div data-aos="fade-up" data-aos-duration="3000">
            <br><br><br><br><br>
            <div class="d-flex justify-content-center">
                <div class="badge text-bg-primary text-wrap" style="width: 50rem;">
                    <h1 class="benefitheading" style="font-size: 60px;">Goodbye to traditional<br> backoffice hassle.
                    </h1>
                    <h5 class="benefitpara mb-5">Welcome to a new era of simplicity and efficiency.</h5>
                </div>
            </div>
            <div class="box">
                <div class="box1" data-aos="fade-left" data-aos-duration="3000">
                    <img src="fingerprint.svg" class="fingerprintpic1 mb-5">
                    <h4 class="boxheading">Optimize your daily operations</h4>
                    <h6 class="text-muted">T.R.A.V.E.L simplifies complex business processes, helping you efficiently
                        manage tasks, projects, and resources.</h6>
                </div>
                <div class="box2" data-aos="fade-up" data-aos-duration="3000">
                    <img src="fingerprint.svg" class="fingerprintpic1 mb-5">
                    <h4 class="boxheading">Make informed business decisions</h4>
                    <h6 class="text-muted">We provide comprehensive analytics, empowering you to identify trends, track
                        performance, and adjust your strategies for success.</h6>
                </div>
                <div class="box3" data-aos="fade-left" data-aos-duration="3000">
                    <img src="fingerprint.svg" class="fingerprintpic1 mb-5">
                    <h4 class="boxheading">Scale your travel business with confidence</h4>
                    <h6 class="text-muted">Our software is designed to grow alongside your business, adapting to your
                        evolving needs. Scale your travel business with confidence.</h6>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->
    <div id="Products-container" data-aos="fade-up" data-aos-duration="3000" margin-top="30%">
        <br><br><br><br><br><br>
        <div class="d-flex justify-content-center ">
            <div class="products-heading-1 ">
                <div class="heading-1">
                    <div class="d-flex justify-content-center">
                        <h6>Features</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
                <div class="badge text-bg-primary text-wrap" style="width: 50rem;">
                    <h1 style="font-size: 60px;">Unlock your full potential with our cutting-edge features.</h1>
                    <h5>rom insightful task handling to sophisticated information evaluation, our platform provides you
                    the necessary instruments to excel in the current aggressive corporate terrain.</h5>
                </div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-products" data-aos="fade-up-right" data-aos-duration="3000">
                        <img src="https://atrex.cloud/wp-content/uploads/2023/12/about-3-1.png" class="card-img-top"
                            alt="card-image-products">
                        <div class="card-body">
                            <h2 class="card-title">Sales Monitoring</h2>
                            <h5 class="card-text">Track your travel performance and profitability in real time.</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-products" data-aos="fade-up-left" data-aos-duration="3000">
                        <img src="https://tapline.io/wp-content/uploads/2022/11/cases_img1.svg" class="card-img-top"
                            alt="card-image-products">
                        <div class="card-body">
                            <h2 class="card-title">Sales Monitoring</h2>
                            <h5 class="card-text">Track your travel performance and profitability in real time.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" padding="-10px">
            <div class="row" data-aos="fade-up-left" data-aos-duration="3000">
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card card-products custom-card">
                        <img src="https://miro.medium.com/v2/resize:fit:1400/1*ZHtxhmXqk3-Bpl2iokfxAA.png"
                            class="card-img-top" alt="card-image-products">
                        <div class="card-body">
                            <h2 class="card-title">Sell at your wish</h2>
                            <h5 class="card-text">Savour the freedom of exciting journeys, unshackled from the necessity
                                of recording and calculating.</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div style="background-color: transparent;" class="card card-products">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcT_2Pku3nurZr5wtdE8kb3BK75isc6aXZTrrugCeHr_odKjEtc8"
                            class="card-img-top" alt="card-image-products">
                        <div class="card-body">
                            <h2 class="card-title">Secure and reliable</h2>
                            <h5 class="card-text">Experience the security and reliability of a cloud-based travel ERP
                                system that delivers speed and performance.</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div style="background-color: transparent;" class="card card-products">
                        <img src="https://framerusercontent.com/images/K4FJtuvIN48J6W9WvaZ9eWWO4a4.png"
                            class="card-img-top" alt="card-image-products">
                        <div class="card-body">
                            <h2 class="card-title">100% integrated</h2>
                            <h5 class="card-text">Connect your travel ERP system with the major GDSs like Sabre,
                                Travelport, and Amadeus seamlessly.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- features -->
            <div class="d-flex justify-content-center">
                <div class="badge text-bg-primary text-wrap" style="width: 50rem;">
                    <h1 style="font-size: 60px;">Some Exciting Features!</h1>
                </div>
            </div>
            <div class="small-card-container" data-aos="fade-right" data-aos-duration="3000">
                <div class="row">
                    <div class="col-md-4 d-flex small-card">
                        <div class="card mb-3 small-product-cards">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcROyLpwNatAqjOZPWywHTlHn0aElas8zIEu3G-Mr8CnWq4i7_aq"
                                        class="small-card-img" alt="finger-print">
                                </div>
                                <div class="col-md-8">
                                    <div class="small-card-body">
                                        <h4 class="card-title">99% Auto feeding</h4>
                                        <p class="card-text">Records are updated in real time</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex small-card">
                        <div class="card mb-3 small-product-cards">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcROyLpwNatAqjOZPWywHTlHn0aElas8zIEu3G-Mr8CnWq4i7_aq"
                                        class="small-card-img" alt="finger-print">
                                </div>
                                <div class="col-md-8">
                                    <div class="small-card-body">
                                        <h4 class="card-title">99% auto invoicing</h4>
                                        <p class="card-text">Invoice are generated seamlessly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex small-card">
                        <div class="card mb-3 small-product-cards">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcROyLpwNatAqjOZPWywHTlHn0aElas8zIEu3G-Mr8CnWq4i7_aq"
                                        class="small-card-img" alt="finger-print">
                                </div>
                                <div class="col-md-8">
                                    <div class="small-card-body">
                                        <h4 class="card-title">Data analytics</h4>
                                        <p class="card-text">Intelligently theme reports are designed to provide
                                            critical insights</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex small-card">
                        <div class="card mb-3 small-product-cards">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcROyLpwNatAqjOZPWywHTlHn0aElas8zIEu3G-Mr8CnWq4i7_aq"
                                        class="small-card-img" alt="finger-print">
                                </div>
                                <div class="col-md-8">
                                    <div class="small-card-body">
                                        <h4 class="card-title">Auto VAT Invoicing</h4>
                                        <p class="card-text">It auto makes the VAT invoice and send it to the customer
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex small-card">
                        <div class="card mb-3 small-product-cards">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcROyLpwNatAqjOZPWywHTlHn0aElas8zIEu3G-Mr8CnWq4i7_aq"
                                        class="small-card-img" alt="finger-print">
                                </div>
                                <div class="col-md-8">
                                    <div class="small-card-body">
                                        <h4 class="card-title">True one window solution</h4>
                                        <p class="card-text">minimum steps to perform any task</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex small-card">
                        <div class="card mb-3 small-product-cards">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcROyLpwNatAqjOZPWywHTlHn0aElas8zIEu3G-Mr8CnWq4i7_aq"
                                        class="small-card-img" alt="finger-print">
                                </div>
                                <div class="col-md-8">
                                    <div class="small-card-body">
                                        <h4 class="card-title">Regional Scalability and Customization</h4>
                                        <p class="card-text">multiple regions creation with customizarion</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex small-card">
                        <div class="card mb-3 small-product-cards">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcROyLpwNatAqjOZPWywHTlHn0aElas8zIEu3G-Mr8CnWq4i7_aq"
                                        class="small-card-img" alt="finger-print">
                                </div>
                                <div class="col-md-8">
                                    <div class="small-card-body">
                                        <h4 class="card-title">Auto mailing</h4>
                                        <p class="card-text">Efficient communication, all smartly automated!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex small-card">
                        <div class="card mb-3 small-product-cards">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcROyLpwNatAqjOZPWywHTlHn0aElas8zIEu3G-Mr8CnWq4i7_aq"
                                        class="small-card-img" alt="finger-print">
                                </div>
                                <div class="col-md-8">
                                    <div class="small-card-body">
                                        <h4 class="card-title">Record banking transactions</h4>
                                        <p class="card-text">All finances sorted without hassle</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex small-card">
                        <div class="card mb-3 small-product-cards">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcROyLpwNatAqjOZPWywHTlHn0aElas8zIEu3G-Mr8CnWq4i7_aq"
                                        class="small-card-img" alt="finger-print">
                                </div>
                                <div class="col-md-8">
                                    <div class="small-card-body">
                                        <h4 class="card-title">Creating cash receipts</h4>
                                        <p class="card-text">Goodbye to piles of receipts, stay organized with e-receipt
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- matrices -->
            <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-duration="3000">
                <div class="products-heading-1 ">
                    <div class="heading-1">
                        <div class="d-flex justify-content-center">
                            <h6>Matrices</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-duration="3000">
                <div class="badge text-bg-primary text-wrap" style="width: 50rem;">
                    <h1 style="font-size: 60px;">You can bet on it!</h1>
                </div>
            </div>
            <div class="container" data-aos="fade-up" data-aos-duration="3000">
                <div class="row">
                    <div class="col-sm">
                        <div class="text-center">
                            <h1 style="font-size: 100px; color: #6a5acd; padding: 2px">99%</h1>
                            <h5 class="px-2">Accuracy in auto feeding</h5>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="badge text-bg-primary text-wrap" style="width: 30rem;">
                            <h1 style="font-size: 90px; color: #6a5acd; padding: 0px">0.015 sec</h1>
                            <h5 class="px-2">Auto feeding time and invoicing time.</h5>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="badge text-bg-primary text-wrap" style="width: 20rem;">
                            <h1 style="font-size: 100px; color: #6a5acd; padding: 2px">24/7</h1>
                            <h5 class="px-2">Technical support</h5>
                        </div>
                    </div>
                </div>
                <!-- slides -->
                <div class="d-flex justify-content-center">
                    <div class="main-heading-products">
                        <div class="badge text-bg-primary text-wrap" style="width: 50rem;">
                            <h1 style="font-size: 60px;">Real stories.</h1>
                            <h1 style="color: gray">Don’t take our word for it.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper ">
            <div class="item">
                <div class="slidecontainer ">
                    <div classF="card slide-card" style="border-radius: 20px; height: auto; width: 100% ">
                        <div class="row g-0 slideimage">
                            <div class="col-md-6">
                                <img src="https://framerusercontent.com/images/jCl7IxnOEN5iV2G3osyfKLdVdoU.jpg?scale-down-to=512"
                                    class="img-fluid rounded-start"
                                    style="width: 110%; border-radius: 30px; padding: 20px " alt="slider-image">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body slidescrollimage1">
                                    <p class="slide-card-text" style="font-size: 35px; line-height: 1;">We were unhappy
                                        with other software providers who failed to offer 100% auto feeding for our
                                        travel data. Then we found T.R.A.V.E.L, the travel ERP software that does 100%
                                        auto feeding and more. T.R.A.V.E.L helps us run our travel business better.</p>
                                    <p style="font-size: 25px; font-weight: bold">Sarah Johnson</p>
                                    <p class="card-text"><small class="text-body-secondary">Travel Business Owner,
                                            Falcon city travels</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card slide-card" style="border-radius: 20px; height: auto; background-color: #A9FFA9">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="https://framerusercontent.com/images/nYmygkv4uP0BWTDc16OQw3RHQw.jpg?scale-down-to=512"
                                class="img-fluid rounded-start" style="width: 110%; border-radius: 30px; padding: 20px"
                                alt="slider-image">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body slidescrollimage2">
                                <p class="slide-card-text" style="font-size: 35px;  line-height: 1;">As a fast-growing
                                    travel agency, we needed an efficient way to manage our resources in different
                                    regions. This ERP software T.R.A.V.E.L exceeded our expectations.</p>
                                <p style="font-size: 25px; font-weight: bold">Zafar Khan</p>
                                <p class="card-text"><small class="text-body-secondary">Travel Business Owner, Falcon
                                        city travels</small></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center ">
            <div class="d-flex justify-content-center" margin-bottom="30px">
                <button class="product-button" style=" margin-bottom: 40px;">View All Stories</button>

            </div>
        </div>
    </div>
    <br><br><br>
    <!--FAQ'S Setion-->
    <div class="container-fluid d-flex justify-content-center align-items-center flex-column mb-5" id="faqscontainer"data-aos="fade-up" data-aos-duration="3000">
        <div class=" mb-3" margin-top="30%">
            <br><br><br><br><br><br>
            <div class="d-flex justify-content-center"
                style="margin-left: 45%;margin-top: 40px;width: 10%; padding: 5px 20px;border-radius: 20px; background-color: rgb(173, 255, 47);">
                <h6>FAQs</h6>
            </div>
            <div class="badge text-bg-primary text-wrap" style="width: 50rem;">
                <h1 style="font-size: 60px;" class="text-muted">Still not convinced?</h1>
                <h1>We've got the answers</h1>
            </div>
        </div>
        <br><br>
        <div class="container mb-5">
            <div class="d-flex justify-content-center align-items-center flex-column" id="accordion" data-aos="fade-up" data-aos-duration="3000" style= "border-radius: 40px;" >
                <div class="faq-card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn faq-btn collapsed" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                                Is there a free Demo available?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="faq-card-body">
                            Yes! We have got you covered until you are satisfied
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn faq-btn collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                What is the pricing?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="faq-card-body">
                            We aim to offer the most affordable prices while delivering the highest quality features.
                            Our
                            pricing plans are tailored to suit the needs of different company sizes.
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn faq-btn collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                How can it be helpful for consolidate business?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="faq-card-body">
                            T.R.A.V.E.L is a software designed for businesses that have a large volume of transactions
                            and
                            sub-agents. It simplifies and automates the daily tasks of travel management.
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="card-header" id="headingfour">
                        <h5 class="mb-0">
                            <button class="btn faq-btn collapsed" data-toggle="collapse" data-target="#collapsefour"
                                aria-expanded="false" aria-controls="collapsefour">
                                Do I need advanced training to use this software?
                            </button>
                        </h5>
                    </div>
                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                        <div class="faq-card-body">
                            T.R.A.V.E.L is designed with the user’s ease in mind, from beginners to professionals. It is
                            very easy to learn and use. So, no advance training is required. We provide video tutorials
                            for
                            almost every function.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="text-center mb-3">
        <p class="question">Still have more questions? Contact our <u>help center</u>.</p>
    </div>
    </div>
    <br>
    <div class="container">
        <div class="footercontainer" data-aos="fade-up" data-aos-duration="2000">
            <div class="faqs-card faqs-custom-card" style=" background-color: transparent; border: none; ">
                <div class="row g-0">
                    <div class="col-md-7 p-0">
                        <div class="faqs-card-body">
                            <h5 class="faqs-card-title text-center">Elevate your Tourism business into a new era, start now.</h5>
                        </div>
                    </div>
                    <div class="col-md-5 p-0">
                        <img src="faqimage.webp" class="img-fluid">
                    </div>

                </div>
            </div>
        </div>
<!-- Other content of your website -->
<div class="text-center pt-5 mt-5 mb-3">
    <!-- This div contains both texts and is centered -->
    <div class="d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <span class="websiteend">Quantaflix</span>
        </div>
        <!-- Right-aligned text -->
        <div>
            <span class="websitetext">All rights reserved Quantaflix | Copyright© 2023</span>
        </div>
    </div>
</div>

        <br>
        <br>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!--used for animations-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>

</html>