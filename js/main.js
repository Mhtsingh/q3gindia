!(function($) {
  "use strict";

  // Smooth scroll for the navigation menu and links with .scrollto classes
  $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      e.preventDefault();
      var target = $(this.hash);
      if (target.length) {

        var scrollto = target.offset().top;

        if ($('#header').length) {
          scrollto -= $('#header').outerHeight();
        }

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Mobile Navigation
  if ($('.nav-menu').length) {
    var $mobile_nav = $('.nav-menu').clone().prop({
      class: 'mobile-nav d-lg-none'
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
    $('body').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
      $('.mobile-nav-overly').toggle();
    });

    $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
      e.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('active');
    });

    $(document).click(function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }

})(jQuery);

// //contact form 
$(document).ready(function () {
    $('#lets_from').submit(function () {
        $('#btn_lets').html('Processing.....').prop('disabled', true);
        var values = $("#lets_from").serialize();
        $.ajax({
            url: "contact_us.php",
            type: "post",
            data: values,
            success: function (response) {
                var result = JSON.parse(JSON.stringify(response));
                console.log(result);
                $('#btn_lets').html('Submit').prop('disabled', false);
                if (result['error'] == 1) {
                    swal({title: "Error", text: result['error_msg'], icon: "error", buttons: false, timer: 2000});

                } else {
                    swal({title: "Success", text: result['error_msg'], icon: "success", buttons: false, timer: 2000});
                    window.location.reload();
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
    $('#contact_from').submit(function () {
    $('#btn').html('Processing.....').prop('disabled', true);
    var values = $("#contact_from").serialize();
    $.ajax({
        url: "contact_us.php",
        type: "post",
        data: values,
        success: function (response) {
           var result = JSON.parse(JSON.stringify(response));
            console.log(result);
            $('#btn').html('SEND MESSAGE').prop('disabled', false);
            if (result['error'] == 1) {
                swal({title: "Error", text: result['error_msg'], icon: "error", buttons: false, timer: 2000});

            } else {
                swal({title: "Success", text: result['error_msg'], icon: "success", buttons: false, timer: 2000});
                window.location.reload();
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
});
});


// Header active

// var header = document.getElementById("headDiv");
// var navLink = header.getElementsByClassName("nav-link");
// for (var i = 0; i < navLink.length; i++) {
//   navLink[i].addEventListener("click", function() {
//   var current = document.getElementsByClassName("activeLink");
//   current[0].className = current[0].className.replace(" activeLink", "");
//   this.className += " activeLink";
//   });
// }

//  pop up form script
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("popupCloseButton")[0]; 
btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//Country code script  
  
const phoneInputField = document.querySelector("#contact");
const phoneInput = window.intlTelInput(phoneInputField, {
  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});
