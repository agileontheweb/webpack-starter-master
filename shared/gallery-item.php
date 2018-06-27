<!-- galleria che massimo6 thumb altrimenti fa il salto di lina  -->

<div class="container relative">
  <div class="slider">
    <div class="numbertext">1 / 6</div>
    <a data-fancybox="gallery" href="images/best-seller-1.png">
      <img src="images/best-seller-1.png" class="w-full">
    </a>
  </div>

  <div class="slider">
    <div class="numbertext">2 / 6</div>
    <a data-fancybox="gallery" href="images/best-seller-2.png">
      <img src="images/best-seller-2.png" class="w-full">
    </a>
  </div>

  <div class="slider">
    <div class="numbertext">3 / 6</div>
    <a data-fancybox="gallery" href="images/best-seller-1.png">
      <img src="images/best-seller-1.png" class="w-full">
    </a>
  </div>

  <div class="slider">
    <div class="numbertext">4 / 6</div>
    <a data-fancybox="gallery" href="images/best-seller-2.png">
      <img src="images/best-seller-2.png" class="w-full">
    </a>
  </div>

  <div class="slider">
    <div class="numbertext">5 / 6</div>
    <a data-fancybox="gallery" href="images/best-seller-1.png">
      <img src="images/best-seller-2.png" class="w-full">
    </a>
  </div>

  <div class="slider">
    <div class="numbertext">6 / 6</div>
    <img src="images/best-seller-2.png" class="w-full">
  </div>

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container bg-primary text-white">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="w-1/6 float-left cursor-pointer">
      <img  class="image-item"
            src="images/best-seller-1.png"
            onclick="currentSlide(1)"
            alt="The Woods">
    </div>
    <div class="w-1/6 float-left cursor-pointer">
      <img  class="image-item"
            src="images/best-seller-2.png"
            onclick="currentSlide(2)"
            alt="Cinque Terre">
    </div>
    <div class="w-1/6 float-left cursor-pointer">
      <img  class="image-item"
            src="images/best-seller-1.png"
            onclick="currentSlide(3)"
            alt="Mountains and fjords">
    </div>
    <div class="w-1/6 float-left cursor-pointer">
      <img  class="image-item"
            src="images/best-seller-2.png"
            onclick="currentSlide(4)"
            alt="Northern Lights">
    </div>
    <div class="w-1/6 float-left cursor-pointer">
      <img  class="image-item"
            src="images/best-seller-1.png"
            onclick="currentSlide(5)"
            alt="Nature and sunrise">
    </div>
    <div class="w-1/6 float-left cursor-pointer">
      <img  class="image-item"
            src="images/best-seller-2.png"
            onclick="currentSlide(6)"
            alt="Snowy Mountains">
    </div>
  </div>
</div>


<script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slider");
  var dots = document.getElementsByClassName("image-item");
  var captionText = document.getElementById("caption");
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
</script>
