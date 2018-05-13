  var slideIndex = 0;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
 showSlides(slideIndex);

 function showSlides(n) {    
    var i,e;    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    for (e = 0; e < dots.length; e++) {
      dots[e].className = dots[e].className.replace(" active", "");
  }

    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    dots[slideIndex-1].className += " active";
    // setTimeout(showSlides,5000);
     // Change image every 5 seconds    
     
}
function currentSlide(no) {
    var i;
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
      for (e = 0; e < dots.length; e++) {
      dots[e].className = dots[e].className.replace(" active", "");
  }
    slideIndex = no;
    slides[no-1].style.display = "block";
    dots[no-1].className += " active";

}
function plusSlides(n) {
  var newslideIndex = slideIndex + n;
  if(newslideIndex == 0)
  {
    newslideIndex = 6;
  }
  if(newslideIndex == 7)
  {
    newslideIndex = 1;
  }
  if(newslideIndex < 7 && newslideIndex > 0){
     currentSlide(newslideIndex);
  }
}