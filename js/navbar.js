$(document).ready(function(){
  console.log("document ready");
  cookieConsent();
  closeAlert();
  toggleNavbar();
  toggleSearch();
  bannerHome();
  tabs();
  buttonNumberIncrement();
  buttonToggleList();
  navFixed();
});

function toggleNavbar() {
  $('.toggle-button').click(function(){
    // $('.navbar-responsive').toggle();
    $('.navbar-responsive').toggleClass("hide-navbar-responsive show-navbar-responsive")
  })
}

function closeAlert(){
  $('.alert .btn-close').click(function(){
    $('.alert').hide();
    bannerHome();
    navFixed();
  })
}

function cookieConsent(){
  $('.cookie-consent #btn-cookie').click(function(){
    $('.cookie-consent').hide();
    bannerHome();
    navFixed();
  })
}

function toggleSearch(){
  $('.btn-search').click(function(){
    var navbarTopHeight = $('.navbar-top').innerHeight();
    // navFixed();
    $('.container-search').css('top', navbarTopHeight);
    $('.container-search').toggle();
  })
}

function bannerHome(){
  var h = $(window).height();
  var navbarTopHeight = $('.navbar-top').innerHeight();
  $('.banner-home').height(h - navbarTopHeight);
}

function tabs(){
  var btns = $("#tabs li");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
}

function buttonNumberIncrement(){
  console.log("Load increment button");
  var btnPlus = $('.module-button-number-increment .btn-plus');
  var btnMinus = $('.module-button-number-increment .btn-minus');
  var resultNumber = $('.module-button-number-increment .result-number');

  var value = 0;
  btnMinus.click(function() {
    if (value == 0) return;
    value--;
    resultNumber.text(value);
  });

  btnPlus.click(function(){
    value++;
    resultNumber.text(value);
  });
}

function buttonToggleList(){
  console.log("buttonToggleList");

  $('.btn-toggle-list').click(function(){
    $(this).find('i').toggleClass("fa-list-ul fa-th-large");
    $('.module-list-items').toggleClass("show-grid-items show-list-items");
  });
}

function navFixed(){
  if($('.navbar-top').hasClass('fixed')){
    var navbarTopHeight = $('.navbar-top').innerHeight();
    $('.main').css('padding-top', navbarTopHeight);
  }
}
