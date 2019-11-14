<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />

    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>


    <title>Silvia Yembi</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <!-- Styles -->
    <style>
        html,
        body {
            background-color: white;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        section {
            margin-bottom: 150px;
        }

        .navbar {
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1;
            padding: 10px;
            box-shadow: 5px 10px 18px #888888;
        }

        .nav-item {
            border: 2px solid #279888 !important;
            width: 92px;
            margin: 10px 20px;
            text-align: center;
        }

        .nav-item a {
            padding: 10px 4px;
            color: #279888;
            font-weight: 600;
        }

        .nav-item:hover,
        .nav-item a:hover {
            background-color: #279888;
            color: white;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title_3 {
            color: black;
            font-weight: 600;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        a {
            text-decoration: none !important;
        }

        .div_mine {
            border: 15px solid #ccc !important;
            border-radius: 50%;
            width: fit-content;
        }

        .div_mine img {
            border: 15px solid #279888 !important;
        }

        .home_section {
            /*background-image: url('images/background.jpg');*/
        }

        .text_home_contact a,
        .text_home_contact span {
            margin-left: 10px;
            color: #636b6f;
        }


        /** Progressbar class css*/
        .base_bar {
            width: 100%;
            background-color: grey;
            border-radius: 6px;

        }

        /* .percent_bar {
            width: 1%;
            height: 15px;
            background-color: green;
            border-radius: 6px;
        } */

        /** end progressbar */

        /*thubnail transaction*/

        .thumbnail {
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;

        }

        #weather .thumbnail {
            border: 2px solid green;
            border-bottom-width: 18px;
            color: green;
        }

        #vocabulary .thumbnail {
            border: 2px solid #065032;
            border-bottom-width: 18px;
            color: #065032;
        }

        #docence .thumbnail {
            border: 2px solid #279888;
            border-bottom-width: 18px;
            color: #279888;
        }

        #user_interface .thumbnail {
            border: 2px solid #4c8d9c;
            border-bottom-width: 18px;
            color: #4c8d9c;
        }

        .thumbnail img {
            display: block;
        }

        .div_transaction {
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background-color: black;
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease;
        }

        .thumbnail:hover .div_transaction {
            top: 0;
            height: 51%;
            width: 91%;

        }

        .div_transaction {
            top: 0;
            width: 86%;
            margin-left: 17px;
        }


        .div_transaction .text_plus {
            /* color: green;*/
            text-align: center;
            font-size: x-large;
            font-weight: bold;
            position: absolute;
            overflow: hidden;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }

        .black_background {
            background-color: black;
            /* color: green;*/
            text-align: center;
        }

        .black_background p {
            margin-bottom: 0;
            font-weight: 600;
        }

        /* end thubnails transaction */

        /**progress */
        .progress {
            margin: 10px 0;
            border-radius: 0 !important;
        }

        .progress-bar {
            text-align: initial;
            padding-left: 10px;
        }

        .bg-success {
            background-color: green !important;
            color: #ccc;
            font-weight: 600;
        }

        .bg-info {
            background-color: #279888 !important;
            color: #ccc;
            font-weight: 600;
        }

        .bg-important {
            background-color: #065032 !important;
            color: #ccc;
            font-weight: 600;
        }

        .bg-user_interface {
            background-color: #4c8d9c;
        }

        .vertical_div {
            -webkit-writing-mode: vertical-lr;
            width: 10%;
            font-weight: 600;
            padding-left: 5px;
        }

        /** progress-circle */

        .progress-circle {
            background-color: #ddd;
            border-radius: 50%;
            display: inline-block;
            height: 10rem;
            margin: 4rem 2rem 0;
            position: relative;
            width: 10rem;
        }


        .progress-circle:before {
            align-items: center;
            background-color: #fff;
            border-radius: 50%;
            content: attr(data-progress) '%';
            display: flex;
            font-size: 3rem;
            justify-content: center;
            position: absolute;
            left: 1rem;
            right: 1rem;
            top: 1rem;
            bottom: 1rem;
            transition: -webkit-transform 0.2s ease;
            transition: transform 0.2s ease;
            transition: transform 0.2s ease, -webkit-transform 0.2s ease;
        }

        .progress-circle:after {
            background-color: #0083ff;
            border-radius: 50%;
            content: '';
            display: inline-block;
            height: 100%;
            width: 100%;
        }

        .progress-circle:hover:before,
        .progress-circle:focus:before {
            -webkit-transform: scale(0.8);
            transform: scale(0.8);
        }

        /**contact */
        .btn_send_menssage {
            font-size: larger;
            border-radius: 25px;
        }

        .btn-form .btn_send_menssage:hover {
            background-color: #ced4da !important;
            color: #279888 !important;
        }

        .form-control {
            border: 2px solid #279888 !important;
        }

        .form-control:hover {
            background-color: #cccccc;
        }

        .img_media {
            padding: 30px;
            border-radius: 30%;
            border: 5px solid #279888 !important;
        }

        .phone {
            color: #279888;
            font-size: larger;
            font-weight: 600;
        }

        /*footer*/
        .div_footer {
            background-color: #279888;
            height: 25px;
        }

        hr {
            background-color: #279888;
            height: 4px;
        }

        .text_footer {
            color: #279888;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="images/logo_white.png" height="50px" class="rounded">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

        </div>
    </nav>
    <div class="container">
        <!--
        ===================
            HOME 
        ===================
        -->
        <section class="home_section" id="Home" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="flex-center position-ref full-height">


                <div class="row">

                    <div class="col-md-6">
                        <div class="div_mine shadow-lg">
                            <img src="images/silvia.jpg" height="290px" class="rounded-circle  animated bounce infinite" alt="Silvia">
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-top: 40px;">
                        <h1>Thank you..</h1>
                        <h3>You have a copy of your message in your email.<br>
                        You will receive my feedback as soon as possible</h3>
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="images/logo_white.png" title="Go back" height="50px" class="rounded">
                        </a>
                    </div>

                </div>
            </div>

        </section>

</body>

</html>