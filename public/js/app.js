        /**
         ***********LOADER********************
         **Spin loader while the page is charging
         */
        var delayInMilliseconds = 1000;

        jQuery(document).ready(function($) {
            setTimeout(function() {
                $('#loading_div').fadeOut('slow', function() {
                    $(this).remove();
                });
            }, delayInMilliseconds);
        });


        //animated
        new WOW().init();

        /**
         ***********COLLAPSE NAVBAR********************
         **Hide navbar when click on an item 
         */
        function collapseMenu() {
            $('.navbar-collapse').collapse('hide');
        }


        /**
         ***********CHANGE BACKROUNG COLOR********************
         ** The user can change background color
         */
        function changeBgColor(myColor) {
            //javascript code
            /*var element = document.body;
            element.classList.toggle(myColor);*/

            $('body').removeClass(); //remove the last background added before
            $('body').addClass(myColor);
            collapseMenu(); //necesary for small devices
        }


        /**
         ***********SCROLL INDICATOR****************
         ** When the user scrolls the page, we have a scroll indicator
         */
        window.onscroll = function() {
            myScrollPage()
        };

        function myScrollPage() {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            document.getElementById("myBar").style.width = scrolled + "%";
        }

        /**
         ***************************
         ** Show text block when hover on git icon in portfolio section
         */
        $( "#git_portfolio" ).hover(function() {
            $("#text_git").css("display", "block");
          });