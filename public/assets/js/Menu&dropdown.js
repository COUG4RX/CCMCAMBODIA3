      //   var swiper = new Swiper(".mySwiper", {
      //     slidesPreview: 1,
      //   pagination: {
      //     el: ".swiper-pagination",
      //     clickable: true,
      //   },
      //   loop:true,
      //   speed:1000,
      //   centeredSlides: true,
      //   autoplay: {
      //     delay: 5000,
      //     disableOnInteraction: false,
      //   },
      //   keyboard: {
      //     enabled: true,
      //   },
      // });
      document.getElementById('search1').addEventListener('click', function() {
        // Get the icon element
        var icon = document.getElementById('search1');

        // Check the current color
        var currentColor = window.getComputedStyle(icon).color;
        // console.log(currentColor);

        // Change the color based on the current color
        if (currentColor == 'rgb(255, 255, 255)') {  // Change this to your desired color condition
            icon.style.color = 'black';  // Change this to your desired color
        } else {
            icon.style.color = 'white';  // Change this to your desired color
        }
        });
      document.getElementById('search2').addEventListener('click', function() {
        // Get the icon element
        var icon = document.getElementById('search2');

        // Check the current color
        var currentColor = window.getComputedStyle(icon).color;
        // console.log(currentColor);

        // Change the color based on the current color
        if (currentColor == 'rgb(255, 255, 255)') {  // Change this to your desired color condition
            icon.style.color = 'black';  // Change this to your desired color
        } else {
            icon.style.color = 'white';  // Change this to your desired color
        }
        });
      // Get the button
        let mybutton = document.getElementById("myBtn");
        let menufixd = document.querySelector(".navbar");
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
            menufixd.classList.remove("fixedmenu");
            headerfixed.classList.remove("fixedheader");
          }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }

        // rotate icon offcanvas menu
            document.addEventListener("DOMContentLoaded", function () {
              var rotateButton = document.getElementById("rotateButton");
              var rotateButton2 = document.getElementById("rotateButton2");
              var rotateButton3 = document.getElementById("rotateButton3");
              var rotateButton4 = document.getElementById("rotateButton4");
              var rotateButton5 = document.getElementById("rotateButton5");
              var rotateButton6 = document.getElementById("rotateButton6");
              var icon = document.getElementById("icon");
              var icon2 = document.getElementById("icon2");
              var icon3 = document.getElementById("icon3");
              var icon4 = document.getElementById("icon4");
              var icon5 = document.getElementById("icon5");
              var icon6 = document.getElementById("icon6");
              var dNone = document.getElementById("dNone");
              var dNone2 = document.getElementById("dNone2");
              var dNone3 = document.getElementById("dNone3");
              var dNone4 = document.getElementById("dNone4");
              var dNone5 = document.getElementById("dNone5");
              var dNone6 = document.getElementById("dNone6");

              rotateButton.addEventListener("click", function () {
                  icon.classList.toggle("rotated");
                  dNone.classList.toggle("dnone");
              });
              rotateButton2.addEventListener("click", function () {
                  icon2.classList.toggle("rotated");
                  dNone2.classList.toggle("dnone");
              });
              rotateButton3.addEventListener("click", function () {
                  icon3.classList.toggle("rotated");
                  dNone3.classList.toggle("dnone");
              });
              rotateButton4.addEventListener("click", function () {
                  icon4.classList.toggle("rotated");
                  dNone4.classList.toggle("dnone");
              });
              rotateButton5.addEventListener("click", function () {
                  icon5.classList.toggle("rotated");
                  dNone5.classList.toggle("dnone");
              });
              rotateButton6.addEventListener("click", function () {
                  icon6.classList.toggle("rotated");
                  dNone6.classList.toggle("dnone");
              });
          });
      AOS.init();