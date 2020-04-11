var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}



$(document).ready(function () {
    let dropings = $("ul.nav li.dropdown");
    dropings.on("mouseover", function () {
        $(".dropdown-menu", this).slideDown("fast", function () {
            dropings.on("mouseleave", function () {
                $(".dropdown-menu", this).slideUp("fast");

            });

        });
    });
});

function empty(){
	let x;
	x = document.getElementById("roll-input").value;
	if(x == ""){
		alert("Oops! I think the text area is empty, please fill");
		return false;
	}
}



// To show and hide the button we use the jQuery ‘scroll’ event to detect if the user is scrolling. Check the top of the window and detect the offset to the top of the page, if it’s greater then 100 pixels show the button by adding the ‘show’ class to the ‘scroll-top-wrapper’ element. That 100 pixel offset is arbitrary and can be changed to suit your site.

$(function(){
 
	$(document).on( 'scroll', function(){
 
		if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
});


// The next step is to handle a button click and scroll to the top of the page. To do this we use the jQuery ‘click’ event. The scrollToTop function uses the jQuery animate method to scroll up with animation rather than instantly.


$(function(){
 
	$(document).on( 'scroll', function(){
 
		if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
 
	$('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}



