      // Get the button
        let mybutton = document.getElementById("myBtn");
        let menufixd = document.querySelector(".navbar-menu");
        let headerfixed = document.querySelector(".header");
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
          if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            mybutton.style.display = "block";
            menufixd.classList.add("fixedmenu");
            headerfixed.classList.add("fixedheader");
          } else {
            mybutton.style.display = "none";
            menufixed.classList.remove("fixedmenu");
            headerfixed.classList.remove("fixedheader");
          }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }

        // rotate icon offcanvas menu
          //   document.addEventListener("DOMContentLoaded", function () {
          //     var rotateButton = document.getElementById("rotateButton");
          //     var rotateButton2 = document.getElementById("rotateButton2");
          //     var rotateButton3 = document.getElementById("rotateButton3");
          //     var rotateButton4 = document.getElementById("rotateButton4");
          //     var rotateButton5 = document.getElementById("rotateButton5");
          //     var rotateButton6 = document.getElementById("rotateButton6");
          //     var icon = document.getElementById("icon");
          //     var icon2 = document.getElementById("icon2");
          //     var icon3 = document.getElementById("icon3");
          //     var icon4 = document.getElementById("icon4");
          //     var icon5 = document.getElementById("icon5");
          //     var icon6 = document.getElementById("icon6");
          //     var dNone = document.getElementById("dNone");
          //     var dNone2 = document.getElementById("dNone2");
          //     var dNone3 = document.getElementById("dNone3");
          //     var dNone4 = document.getElementById("dNone4");
          //     var dNone5 = document.getElementById("dNone5");
          //     var dNone6 = document.getElementById("dNone6");

          //     rotateButton.addEventListener("click", function () {
          //         icon.classList.toggle("rotated");
          //         dNone.classList.toggle("dnone");
          //     });
          //     rotateButton2.addEventListener("click", function () {
          //         icon2.classList.toggle("rotated");
          //         dNone2.classList.toggle("dnone");
          //     });
          //     rotateButton3.addEventListener("click", function () {
          //         icon3.classList.toggle("rotated");
          //         dNone3.classList.toggle("dnone");
          //     });
          //     rotateButton4.addEventListener("click", function () {
          //         icon4.classList.toggle("rotated");
          //         dNone4.classList.toggle("dnone");
          //     });
          //     rotateButton5.addEventListener("click", function () {
          //         icon5.classList.toggle("rotated");
          //         dNone5.classList.toggle("dnone");
          //     });
          //     rotateButton6.addEventListener("click", function () {
          //         icon6.classList.toggle("rotated");
          //         dNone6.classList.toggle("dnone");
          //     });
          // });
      AOS.init();