/**
 ***********LOADER********************
 **Spin loader while the page is charging
 */
var delayInMilliseconds = 1000;

jQuery(document).ready(function ($) {
    setTimeout(function () {
        $('#loading_div').fadeOut('slow', function () {
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
window.onscroll = function () {
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
$("#git_portfolio").hover(function () {
    $("#text_git").css("display", "block");
});



/**
 ***************************
 ** Animated navbar, highlights the section in navbar while scrolling
 */
//
const sections = document.querySelectorAll('section');
const my_box_item = document.querySelector('.my_box_item');


//navcheck 
function navCheck(entries) {
    //we loop every section in the page
    entries.forEach(entry => {
        //console.log(entry);
        //get className from the entry
        const className = entry.target.className;
        console.log("class ", className);

        //check out the active anchor
        const activeAnchor = document.querySelector(`[data-page=${className}]`);
        //grab the color index (0,1,2,3 we have in each section)
        const bgColorIndex = entry.target.getAttribute('data-index');
        //get position to get the height and width of my_box_item
        const coords = activeAnchor.getBoundingClientRect();
        const directions = {
            height: coords.height/8, 
            width: coords.width/5,
            top: coords.top+25,
            left: coords.left+40
        };
        //if the tank it's visible
        if (entry.isIntersecting) {
            //grab the my box to set the property
            //console.log('inter', my_box_item);
            my_box_item.style.setProperty("left", `${directions.left}px`),
                my_box_item.style.setProperty("top", `${directions.top}px`),
                my_box_item.style.setProperty("width", `${directions.width}px`),
                my_box_item.style.setProperty("height", `${directions.height}px`)
        }
    });
}


//options, we activate the animation here when we dow 70% of the element
const options = {
    threashold: 0.7
};


//intersection observe, it detects when something is in the page when scrolls
//navcheck is the function it will run
let obsever = new IntersectionObserver(navCheck, options);


//what we want to observe is each section
sections.forEach(section => {
    obsever.observe(section);
});


