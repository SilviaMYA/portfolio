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
        <a class="navbar-brand" href="#">
            <img src="images/logo_white.png" height="50px" class="rounded">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mr-auto ml-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#mh-home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#mh-about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#mh-skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#mh-experience">Experiences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#mh-portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#mh-contact">Contact</a>
                </li> -->
                @foreach ($items_nav_bar as $item)
                <li class="nav-item @if ($loop->index === 0) active @endif">
                    <a href="#{{ $item }}">{{ $item }}</a>
                </li>
                @endforeach
            </ul>
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
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth
                </div>
                @endif

                <div class="row">
                    <div class="col-md-6" style="margin-top: 40px;">
                        <div class=" text-center">
                            <h1 class="font-weight-bold">Silvia Yembi</h1>
                        </div>
                        <div class="text-center font-weight-bold">
                            Software Developer
                        </div>

                        <div class="mt-5 mb-2 text_home_contact">
                            <i class="fa fa-at"></i>
                            <a href="mailto: s.mik@hotmail.com" rel="nofollow noopener noreferrer">s.mik@hotmail.com</a>
                        </div>
                        <div class=" mb-2 text_home_contact">
                            <i class="fa fa-map-marker"></i>
                            <span class="ml-3">Richmond, Melbourne VIC </span>
                        </div>
                        <div class=" text_home_contact">
                            <i class="fa fa-phone"></i>
                            <a href="calto: +61468370503">+61 468 370 503</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="div_mine shadow-lg">
                            <img src="images/silvia.jpg" height="290px" class="rounded-circle  animated bounce infinite" alt="Silvia">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--
        ==================
            PORTFOLIO
        =================
        -->
        <section class="my_portfolio" id="Portfolio">
            <h3 class="title_3 text-center mb-5">Portfolio</h3>
            <div class="row">
                <div class="col-md-4" id="weather">
                    <a href="http://checkweather.rf.gd" target="_blank">
                        <div class="thumbnail">
                            <img src="images/weather.png" class="mx-auto" alt="img04" height="205px">
                            <div class="div_transaction">
                                <span class="text_plus">Enter a city name to check the weather</span>
                            </div>
                            <div class="black_background">
                                <h3 class="mb-0">Check the weather</h3>
                                <p>API weather</p>
                            </div>
                        </div>
                    </a>
                    <div class="row ml-0 mr-0" style="margin-top: 18px">
                        <div class="black_background vertical_div" style="color: green">Skills</div>
                        <div class="pl-0 pr-0" style=" width: 90%;">
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width:30%">Rest API</div>
                                <div class="text-sm-right pr-2" style="width:70%;">30%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width:20%">Jquery </div>
                                <div class="text-sm-right pr-2" style="width:80%;">20%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width:50%">HTML, CSS & Bootstrap</div>
                                <div class="text-sm-right pr-2" style="width:50%;">50%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Docence-->
                <div class="col-md-4" id="docence">
                    <a href="https://docence22.000webhostapp.com/" target="_blank">
                        <div class="thumbnail">
                            <img src="images/docence.jpg" class="mx-auto" alt="img04" height="205px">
                            <div class="div_transaction">
                                <span class="text_plus">Professors and students interract to post and solve homework</span>
                            </div>
                            <div class="black_background">
                                <h3 class="mb-0">Homework system online</h3>
                                <p>Docencia</p>
                            </div>
                        </div>
                    </a>
                    <div class="row ml-0 mr-0" style="margin-top: 18px">
                        <div class="black_background vertical_div" style="color: #279888">Skills</div>
                        <div class="pl-0 pr-0" style=" width: 90%;">
                            <div class="progress">
                                <div class="progress-bar bg-info" style="width:70%">PHP</div>
                                <div class="text-sm-right pr-2" style="width:30%;">40%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" style="width:20%">MySQL </div>
                                <div class="text-sm-right" style="width:80%; padding-right: 10px;">30%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" style="width:30%">HTML, CSS & Bootstrap</div>
                                <div class="text-sm-right pr-2" style="width:70%;">30%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" style="width:10%">JQuery</div>
                                <div class="text-sm-right pr-2" style="width:90%;">10%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Write Down Vocabularyary -->
                <div class="col-md-4" id="vocabulary">
                    <a href="http://write-down-dictionary.herokuapp.com/" target="_blank">
                        <div class="thumbnail">
                            <img src="images/vocabulary.gif" class="mx-auto" alt="img04" height="205px">
                            <div class="div_transaction">
                                <span class="text_plus">Add new entries to the dictionary</span>
                            </div>
                            <div class="black_background">
                                <h3 class="mb-0">Write down vocabulary</h3>
                                <p>Vocabulary</p>
                            </div>
                        </div>
                    </a>
                    <div class="row ml-0 mr-0" style="margin-top: 18px">
                        <div class="black_background vertical_div" style="color: #065032">Skills</div>
                        <div class="pl-0 pr-0" style=" width: 90%;">
                            <div class="progress">
                                <div class="progress-bar bg-important" style="width:30%">Rest API</div>
                                <div class="text-sm-right pr-2" style="width:70%;">30%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-important" style="width:20%">Jquery </div>
                                <div class="text-sm-right pr-2" style="width:80%;">20%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-important" style="width:50%">HTML, CSS & Bootstrap</div>
                                <div class="text-sm-right pr-2" style="width:50%;">50%</div>
                            </div>
                        </div>
                    </div>
                </div>



                <!--user interface-->
                <div class="col-md-4 mt-5" id="user_interface">
                    <a href="https://new-geapp.herokuapp.com/" target="_blank">
                        <div class="thumbnail">
                            <img src="images/user_interface.png" class="mx-auto" alt="img04" height="160px">
                            <div class="div_transaction">
                                <span class="text_plus">Explore user interface access </span>
                            </div>
                            <div class="black_background">
                                <h3 class="mb-0">User interface access</h3>
                                <p>User experience</p>
                            </div>
                        </div>
                    </a>
                    <div class="row ml-0 mr-0" style="margin-top: 18px">
                        <div class="black_background vertical_div" style="color:#4c8d9c">Skills</div>
                        <div class="pl-0 pr-0" style=" width: 90%;">
                            <div class="progress">
                                <div class="progress-bar bg-user_interface " style="width:20%">Ruby on Rails</div>
                                <div class="text-sm-right pr-2" style="width:80%;">20%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-user_interface" style="width:70%">HTML, CSS & Bootstrap</div>
                                <div class="text-sm-right pr-2" style="width:20%;">80%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!--
        ===================
           SKILLS
        ===================
        -->
        <section id="Skills">
            <h3 class="title_3 text-center mb-5">Professional Skills</h3>

            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-md-3">
                        <!-- <div class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                        </div> -->
                        <div class="progress-circle" data-progress="80"></div>
                        <div class="skill_name">Communication</div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="progress-circle" data-progress="90"></div>
                        <div class="skill_name">Team Work</div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="progress-circle" data-progress="30"></div>
                        <div class="skill_name">Project Management</div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="progress-circle" data-progress="50"></div>
                        <div class="skill_name">Creativity</div>

                    </div>
                </div>
            </div>

        </section>
        <!--
        ===================
           EXPERIENCE
        ===================
        -->

        <!--
        ===================
           CONTACT
        ===================
        -->
        <div class="clearfix"></div>
        <section id="Contact">
            <div class="container">
                <h3 class="title_3 text-center mb-5 mt-5">Contact me</h3>
                <div class="row">
                    <div class="col-md-6">
                        <form action="contact-me" method="POST">
                            @csrf
                            <!--to prevent the App from the outside the website request  -->
                            <div class="row">

                                <div class="col-md-6 mb-1">
                                    <input name="name" class="form-control" type="text" placeholder="Name">
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <input name="phone" class="form-control" type="text" placeholder="Phone">
                                </div>
                                <div class="col-sm-12 mb-1">
                                    <input name="email" class="form-control" type="text" placeholder="Your Email">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                                <div class="col-sm-12 mb-2">
                                    <textarea name="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                                    <span class="text-danger">{{ $errors->first('user_message') }}</span>

                                </div>
                                <div class="btn-form col-sm-12">
                                    <button type="submit" class="btn btn_send_menssage btn-block bg-info" id="form-submit">Send Message</button>
                                </div>
                            </div>
                        </form>


                    </div>
                    <div class=" col-md-6 ">
                        <div class="row">
                            <div class="col-sm-4 mt-5  text-right">
                                <a target="_blank" href="https://www.linkedin.com/in/silvia-yembi/" rel="nofollow noopener noreferrer">
                                    <img class="img_media" src="images/linkedin.png">
                                </a>
                            </div>
                            <div class="col-sm-4 mt-5 text-center">
                                <a target="_blank" href="https://www.facebook.com/silvia.yembi" rel="nofollow noopener noreferrer">
                                    <img class="img_media" src="images/facebook.png">
                                </a>
                            </div>
                            <div class="col-sm-4 mt-5  text-left">
                                <a href="mailto: s.mik@hotmail.com" rel="nofollow noopener noreferrer">
                                    <img class="img_media" src="images/at1.png" height="105px">
                                </a>
                            </div>
                            <div class="col-sm-12 text-center mt-5">
                                <i class="fa fa-phone"></i>
                                <span class="phone"> +61 468 370 503</span>
                            </div>
                        </div>
                    </div> <!--  end div social media icons -->
                </div> <!--  end div row -->

            </div> <!--  end contact container -->

        </section>
        <div>
            <hr class="mb-0">
            <p class="text_footer  text-center mb-0"> &copy; Silvia Yembi</p>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            //portfolio/g1.jpgmove();

        });


        var i = 0;

        function move(skill) {
            if (i == 0) {
                i = 1;
                var elem = document.getElementById(skill);

                var width = 1;
                var id = setInterval(frame, 10);

                function frame() {
                    if (width >= 100) {
                        clearInterval(id);
                        i = 0;
                    } else {
                        width++;
                        console.log("elem ", elem);
                        //elem.style.width = width + "%";
                    }
                }
            }
        }
    </script>


</body>

</html>