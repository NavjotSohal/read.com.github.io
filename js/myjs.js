document.getElementById("myBtn").addEventListener("click",open_close)

var menuState = 1 // close
function open_close() {
   if(menuState === 0){
    menuState = 1;
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("iconMenu").style.boxShadow = "0 0 35px #F70D1A";
    document.getElementById("onIcon").style.display = "none";
    document.getElementById("clsIcon").style.display = "inline-block";
   }

   else {
    menuState = 0;
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("iconMenu").style.boxShadow = "0 0 30px #39FF14";
    document.getElementById("clsIcon").style.display = "none";
    document.getElementById("onIcon").style.display = "inline-block";
   }

}



// Open the Modal
function openGLBModal() {
  document.getElementById("gLBModal").style.display = "block";
  document.getElementById("onIcon").style.display = "none";
  document.getElementById("clsIcon").style.display = "none";


}

// Close the Modal
function closeGLBModal() {
  document.getElementById("gLBModal").style.display = "none";
  document.getElementById("onIcon").style.display = "inline-block";
  document.getElementsById("iconMenu").style.display = "block";
  document.getElementById("iconMenu").style.boxShadow = "0 0 30px #39FF14";

}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("glbSlides");
  var dots = document.getElementsByClassName("glbdemo");
  var captionText = document.getElementById("glbcaption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}


//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
