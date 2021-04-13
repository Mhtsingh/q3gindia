
$(document).ready(function () {
  $('#lets_from').submit(function () {
      $('#btn_lets').html('Processing.....').prop('disabled', true);
      var values = $("#lets_from").serialize();
      $.ajax({
          url: "contact_us.php",
          type: "post",
          data: values,
          success: function (response) {
             var result =   JSON.parse(JSON.stringify(response));
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
});
// Header active

var header = document.getElementById("headDiv");
var navLink = header.getElementsByClassName("nav-link");
for (var i = 0; i < navLink.length; i++) {
  navLink[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("activeLink");
  current[0].className = current[0].className.replace(" activeLink", "");
  this.className += " activeLink";
  });
}
//  pop up form script
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
// var btns = document.getElementById("myBtn1");
var span = document.getElementsByClassName("popupCloseButton")[0]; 
btn.onclick = function() {
  modal.style.display = "block";
}
// btns.onclick = function() {
//   modal.style.display = "block";
// }
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

// Vertical tab
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
  tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
  tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
  }
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

  
// **************************************

// portfolio product script
// filterSelection("all")
// function filterSelection(c) {
//   var x, i;
//   x = document.getElementsByClassName("column");
//   if (c == "all") c = "";
//   for (i = 0; i < x.length; i++) {
//     w3RemoveClass(x[i], "show");
//     if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
//   }
// }

// function w3AddClass(element, name) {
//   var i, arr1, arr2;
//   arr1 = element.className.split(" ");
//   arr2 = name.split(" ");
//   for (i = 0; i < arr2.length; i++) {
//     if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
//   }
// }

// function w3RemoveClass(element, name) {
//   var i, arr1, arr2;
//   arr1 = element.className.split(" ");
//   arr2 = name.split(" ");
//   for (i = 0; i < arr2.length; i++) {
//     while (arr1.indexOf(arr2[i]) > -1) {
//       arr1.splice(arr1.indexOf(arr2[i]), 1);     
//     }
//   }
//   element.className = arr1.join(" ");
// }

// var btnContainer = document.getElementById("productContainer");
// // var btns = header.getElementsByClassName("nav-link");

// var Pbtns = btnContainer.getElementsByClassName("Pbtn");
// for (var i = 0; i < Pbtns.length; i++) {
//   Pbtns[i].addEventListener("click", function(){
//     var current = document.getElementsByClassName("activeButton");
//     current[0].className = current[0].className.replace("activeButton", "");
//     this.className += "activeButton";
//   });
// }

// Read More Script
function readMoreFunction1() {
  var dots = document.getElementById("dots");
  var moreText1 = document.getElementById("more1");
  var btnText1 = document.getElementById("ReadMoreBtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText1.innerHTML = "Read more"; 
    moreText1.style.display = "none"; 

  } else {
    dots.style.display = "none";
    btnText1.innerHTML = "Read less"; 
    moreText1.style.display = "inline";

  }
}
function readMoreFunction2() {
  var dots = document.getElementById("dots");
  var moreText2 = document.getElementById("more2");
  var btnText2 = document.getElementById("ReadMoreBtn2");
  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText2.innerHTML = "Read more"; 
    moreText2.style.display = "none";

  } else {
    dots.style.display = "none";
    btnText2.innerHTML = "Read less"; 
    moreText2.style.display = "inline";
  
  }
}function readMoreFunction3() {
  var dots = document.getElementById("dots");
  var moreText3 = document.getElementById("more3");
  var btnText3 = document.getElementById("ReadMoreBtn3");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText3.innerHTML = "Read more"; 
    moreText3.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText3.innerHTML = "Read less"; 
    moreText3.style.display = "inline";
  }
}




// ***************************************
