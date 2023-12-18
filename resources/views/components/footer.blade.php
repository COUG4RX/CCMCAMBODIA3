<footer>
  <div class="container-fluid footer-wrapper-content d-flex justify-content-center">
    <div>
      <h6 class="text-white text-center py-10">The Country Coordinating Committee (CCC for GFATM)/CCC Secretariat Office <br>
        Building #57, Street #608, Corner 307, Boeung Kok II, Toul Kok, Phnom Penh, Cambodia <br>
        cccsec_m@ccmcambodia.org <br>
        +855 17 666 296
      </h6>
    </div>

    <button id="scrollToTopBtn" class="bgscrollToTopBtn fixed bottom-4 right-4 text-white p-2 rounded-full hidden">
      <i class="fa-solid fa-angles-up scroll-top"></i>
    </button>
  </div>
</footer>


<script type="module">
  document.addEventListener("DOMContentLoaded", function() {
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");

    // Show/hide the button based on the scroll position
    window.addEventListener("scroll", function() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopBtn.style.display = "block";
      } else {
        scrollToTopBtn.style.display = "none";
      }
    });
    // Scroll to the top with smooth behavior when the button is clicked
    scrollToTopBtn.addEventListener("click", function() {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    });
  });
</script>