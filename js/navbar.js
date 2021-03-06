$(document).ready(function(){
  console.log("document ready");
  cookieConsent();
  closeAlert();
  toggleNavbar();
  toggleSearch();
  toggleSideMenu();
  bannerHome();
  buttonNumberIncrement();
  buttonToggleList();
  navFixed();
  addToCart();
  owlCarousel();
});

function toggleNavbar() {
  $('.toggle-button').click(function(){
    $('.navbar-responsive').toggleClass("hide-navbar-responsive show-navbar-responsive")
  });
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
    $('.container-search').css('top', navbarTopHeight);
    $('.container-search').toggle();
  });

  $(document).mouseup(function(e) {
    var container = $(".container-search");
    if (!container.is(e.target) && container.has(e.target).length === 0){
      container.hide();
    }
  });
}

function bannerHome(){
  var h = $(window).height();
  var navbarTopHeight = $('.navbar-top').innerHeight();
  $('.banner-home').height(h - navbarTopHeight);
}


function changeTab(evt, sectionName) {
  var sectionName;
  var i, tabcontent, tablinks;
  tablinks = document.getElementsByClassName("tablinks");
  tabcontent = document.getElementsByClassName("tabcontent");

  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  document.getElementById(sectionName).style.display = "block";
  evt.currentTarget.className += " active";
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

function toggleSideMenu(){
  $('.btn-toggle-sidebar').click(function(){
    $('.side-menu-responsive').toggleClass("hide-sidemenu-responsive show-sidemenu-responsive");
  });

  $('.toggle-button-close').click(function(){
    $('.side-menu-responsive').toggleClass("hide-sidemenu-responsive show-sidemenu-responsive");
  })
}


function addToCart(){
  $('.btn-add-to-cart').click(function(){
    $('.animation-cart').addClass('shake-cart');
    $(".animation-cart").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){
      $('.animation-cart').removeClass('shake-cart');
    });
  })
}

function owlCarousel(){
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
      }
    });
  });
}
