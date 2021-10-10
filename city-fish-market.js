$('#cf-burger-nav').click(() => {
    $('#cf-burger-nav').toggleClass('open');
    $('.cf-mobile-nav').slideToggle();
});

let menuItems = document.querySelector('.cf-menu').querySelectorAll('a');
let mobileMenuItems = document.querySelector('.cf-menu-mobile').querySelectorAll('a');
let cityFishSections = document.querySelector('.site-wrap').querySelectorAll('section');
for (let i = 0; i < menuItems.length; i++) {
  $(menuItems[i]).click(function(e){
    $([document.documentElement, document.body]).animate({
      scrollTop: $(cityFishSections[i]).offset().top
    }, 500);
    e.preventDefault();
  });
}

$(window).scroll(function() {
  var scrollDistance = $(window).scrollTop();
  
  // Assign active class to nav links while scolling
  $('section').each(function(i) {
      if ($(this).position().top <= scrollDistance) {
          $(menuItems).removeClass('active');
          $(menuItems).eq(i).addClass('active');
      }
  });
}).scroll();

for (let i = 0; i < mobileMenuItems.length; i++) {
  $(mobileMenuItems[i]).click(function(e){
    $([document.documentElement, document.body]).animate({
      scrollTop: $(cityFishSections[i]).offset().top - 60
    }, 500);
    e.preventDefault();
  });
}

$(window).scroll(function() {
  var scrollDistance = $(window).scrollTop();
  
  // Assign active class to nav links while scolling
  $('section').each(function(i) {
      if ($(this).position().top <= scrollDistance + 65) {
          $(mobileMenuItems).removeClass('active');
          $(mobileMenuItems).eq(i).addClass('active');
      }
  });
}).scroll();
