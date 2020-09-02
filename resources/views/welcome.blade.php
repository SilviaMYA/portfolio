<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />

    <!-- Animated -->
    <link rel="stylesheet" href="{{ URL::asset('css/animated.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">

    <link rel="icon" type="image/x-icon" href="images/favicon.png" />

    <title>Silvia Yembi</title>
</head>

<body>

    <!-- <div class="header mh-xs-mobile-nav"> -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#" onclick="collapseMenu()">
                <img src="images/logo_white.png" height="50px" class="rounded">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ">
                    @foreach ($items_nav_bar as $item)
                    <li class="nav-item @if ($loop->index === 0) active @endif">
                        <a data-page="{{ $item }}" href="#{{ $item }}" class="nav-link" onclick="collapseMenu()" data-target=".navbar-collapse.show">{{ $item }}</a>
                    </li>
                    @endforeach
                    <li>
                        <!-- button to change background color -->
                        <div class="dropdown ml-md-5">
                            <button class="dropbtn right">Change background</button>
                            <div class="dropdown-content">
                                <div class="row">
                                    <div class="col-4 bg-dark" onclick="changeBgColor('bg-dark')">black</div>
                                    <div class="col-4 bg-white" onclick="changeBgColor('bg-white')">white</div>
                                    <div class="col-4 bg_gray" onclick="changeBgColor('bg_gray')">gray</div>
                                </div>
                            </div>

                        </div>
                    </li>
                    <div class="my_box_item"></div>

                </ul>
            </div>



        </nav>

        <!-- d-none d-md-block to hide for small devices -->
        <div class="col-sm-12 progress_container d-none d-md-block">
            <div class="progress_bar_scroll" id="myBar"></div>
        </div>
    </header>
    <!-- </div> -->



    <div class="container">
        <div id="loading_div">
            <img id="loading_image" src="images/loader.gif" alt="Loading..." />
        </div>

        <!--
        ===================
            HOME 
        ===================
        -->
        <section id="Home" class="Home" data-index="0" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="flex-center position-ref full-height">

                <div class="row">
                    <div class="col-6 contact_home_div">
                        <div class=" text-center wow bounceInLeft">
                            <h3 class="title_3">Silvia Yembi</h3>
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
                            <a href="callto: +61468370503">+61 468 370 503</a>
                        </div>
                    </div>
                    <div class="col-6 float-sm-left">
                        <div class="div_mine shadow-lg">
                            <img src="images/silvia.jpg" height="290px" class="rounded-circle  animated bounce" alt="Silvia">
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
        <section class="Portfolio" data-index="1" id="Portfolio">
            <h3 class="title_3 text-center mb-5">Portfolio</h3>
            <hr class="pink_hr mt-n4">
            <div class="wow bounceInLeft">
                <div class="text-center mb-5">
                    <a id="git_portfolio" target="_blank" href="https://github.com/SilviaMYA" rel="nofollow noopener noreferrer">
                        <span style="font-size: 100px; color: #279888">
                            <i class="fab fa-github"></i>
                        </span>
                        <h3 id="text_git" style="display: none">Find all code of this portfolio on my git account</h3>
                    </a>
                </div>
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
                        <div class="row ml-0 mr-0" style="margin-top: 18px; margin-bottom:60px;">
                            <div class="black_background vertical_div" style="color: green">Skills</div>
                            <div class="pl-0 pr-0" style=" width: 90%;">
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width:70%">Rest API</div>
                                    <div class="text-right pr-2" style="width:30%;">70%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width:60%">Jquery </div>
                                    <div class="text-right pr-2" style="width:40%;">60%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width:80%">HTML, CSS & Bootstrap</div>
                                    <div class="text-right pr-2" style="width:20%;">80%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Docence-->
                    <div class="col-md-4 wow bounceInDown" id="docence">
                        <a href="https://docencia22.000webhostapp.com/" target="_blank">
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
                        <div class="row ml-0 mr-0" style="margin-top: 18px; margin-bottom:60px;">
                            <div class="black_background vertical_div" style="color: #279888">Skills</div>
                            <div class="pl-0 pr-0" style=" width: 90%;">
                                <div class="progress">
                                    <div class="progress-bar bg-info" style="width:70%">PHP</div>
                                    <div class="text-right pr-2" style="width:30%;">70%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" style="width:50%">MySQL </div>
                                    <div class="text-right" style="width:50%; padding-right: 10px;">50%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" style="width:70%">HTML, CSS & Bootstrap</div>
                                    <div class="text-right pr-2" style="width:30%;">70%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" style="width:20%">JQuery</div>
                                    <div class="text-right pr-2" style="width:80%;">20%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Write Down Vocabularyary -->
                    <div class="col-md-4  wow bounceInRight" id="vocabulary">
                        <a href="http://write-down-dictionary.herokuapp.com" target="_blank">
                            <div class="thumbnail">
                                <img src="images/vocabulary.gif" class="mx-auto" alt="img04" height="205px">
                                <div class="div_transaction">
                                    <span class="text_plus">Add new entry to the dictionary</span>
                                </div>
                                <div class="black_background">
                                    <h3 class="mb-0">Write down vocabulary</h3>
                                    <p>Vocabulary</p>
                                </div>
                            </div>
                        </a>
                        <div class="row ml-0 mr-0" style="margin-top: 18px; margin-bottom:60px;">
                            <div class="black_background vertical_div" style="color: #065032">Skills</div>
                            <div class="pl-0 pr-0" style=" width: 90%;">
                                <div class="progress">
                                    <div class="progress-bar bg-important" style="width:50%">HTML</div>
                                    <div class="text-right pr-2" style="width:50%;">50%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-important" style="width:70%">Jquery </div>
                                    <div class="text-right pr-2" style="width:30%;">70%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-important" style="width:50%">CSS & Bootstrap</div>
                                    <div class="text-right pr-2" style="width:50%;">50%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        ===================
           ABOUT
        ===================
        -->
        <section id="About" class="About" data-index="2">
            <h3 class="title_3 text-center mb-5">About</h3>
            <hr class="pink_hr mt-n4">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="pt-0 pb-5  text-center">
                        <p>
                            I a am highly motivated and dedicated developer specialized in web programming and Android applications. I enjoy working as part of a team, facing new challenges and coming up with innovative solutions to make a project evolve and have more utility and functionality for a customer on a daily basis. I am continually seeking to learn and improve, which is why I am looking for new experiences and new challenges.
                        </p>

                    </div>
                    <div class="media col-12 col-md-4 wow bounceInLeft mb-5">
                        <img src="images/responsive-design-symbol.png" alt="responsive design" class="mr-3 mt-3 align-self-center">
                        <div class="media-body">
                            <h4>Responsive design</h4>
                            <p>I mix flexible grids, layouts, images using CSS media queries and Bootstrap to make my projects look good on all devices.</p>
                        </div>
                    </div>
                    <div class="media col-12 col-md-4 wow bounceInRight">
                        <img src="images/clear-code.png" alt="Clear code" class="ml-3 mt-3 align-self-center">
                        <div class="media-body">
                            <h4>Clear code</h4>
                            <p>I practice writing clear code that is readable and understandable for others and not only for computers.</p>
                        </div>
                    </div>
                </div>


                <div class="row mt-5">

                    <div class="col-6 col-md-3 text-center mb-5">
                        <img src="images/teamwork.png" alt="Team work">
                        <div class="font-weight-bold">Team work</div>
                    </div>
                    <div class="col-6 col-md-3 text-center mb-5">
                        <img src="images/can-do-attitude.png" alt="Positivity attitude">
                        <div class="font-weight-bold">Can do attitude</div>
                    </div>

                    <div class="col-6 col-md-3 text-center">
                        <img src="images/goal.png" alt="improve">
                        <div class="font-weight-bold">Allways improving</div>
                    </div>

                    <div class="col-6 col-md-3 text-center">
                        <img src="images/motivated.png" alt="Motivated">
                        <div class="font-weight-bold">Motivated</div>
                    </div>
                </div>
            </div>

        </section>

        <!--
        ===================
           CONTACT
        ===================
        -->
        <section id="Contact" class="Contact" data-index="3" style="margin-top: 180px;">
            <div class="container">
                <h3 class="title_3 text-center mb-5">Contact me</h3>
                <hr class="pink_hr mt-n4">
                <div class="row">
                    <div class="col-md-6 wow bounceInLeft">
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
                        <div class="row  wow bounceInRight justify-content-center">
                            <div class="col-3 mt-5  ">
                                <a target="_blank" class=" icon_media" href="https://www.linkedin.com/in/silvia-yembi/" rel="nofollow noopener noreferrer">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                            <div class="col-3 mt-5">
                                <a target="_blank" class=" icon_media" href="https://www.facebook.com/silvia.yembi" rel="nofollow noopener noreferrer">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </div>
                            <div class="col-3 mt-5">
                                <a target="_blank" class=" icon_media" href="https://github.com/SilviaMYA" rel="nofollow noopener noreferrer">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                            <div class="col-3 mt-5">
                                <a class=" icon_media" href="mailto: s.mik@hotmail.com" rel="nofollow noopener noreferrer">
                                    <i class="fas fa-at"></i>
                                </a>
                            </div>
                            <div class="col-sm-12 text-center mt-5">
                                <i class="fa fa-phone"></i>
                                <b>+61 468 370 503<b>
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

    <!-- Scripts -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- Animated js file -->
    <script type="text/javascript" src="{{ URL::asset('js/wow.min.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> -->

    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

</body>

</html>