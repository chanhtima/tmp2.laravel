  // ดักจับเหตุการณ์คลิกในทั้งเอกสาร
  document.addEventListener("click", function(event) {
    var navbar = document.querySelector(".navbar");
    var toggleButton = document.querySelector(".navbar-toggler");

    // ตรวจสอบว่าคลิกเกิดที่พื้นที่ว่างภายนอกเมนูแถบนำทางและไม่ได้คลิกที่ปุ่มเปิดเมนู
    if (!navbar.contains(event.target) && event.target !== toggleButton) {
      // ปิดเมนู (ถ้าเปิดอยู่)
      var navbarCollapse = document.querySelector(".navbar-collapse");
      if (navbarCollapse.classList.contains("show")) {
        toggleButton.click();
      }
    }
  });
$(document).ready(function() {
    // Show or hide the button based on scroll position
    $(window).scroll(function() {
        if ($(this).scrollTop() > $(document).height() - $(window).height() - 80) {
            $('#back-to-top').fadeOut();
        } else {
            $('#back-to-top').fadeIn();
        }
    });

    // Scroll to top on button click
    $('#back-to-top').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});
var timer
$("#search-input").on("keyup", function () {
  clearTimeout(timer)
  timer = setTimeout(function () {
    if (!$("#search-input").val()) {
      $(".search-form-wrapper").addClass("off-result")
    } else {
      $(".search-form-wrapper").removeClass("off-result")
    }
  }, 500)
})
$("button[type='button'].search-icon-search").click(function () {
  $(".search-form-wrapper").toggleClass("form-active")
  $(".search-container").addClass("mobile-active")
})
$(".search-icon-close").click(function () {
  $("#search-input").val("")
  $(".search-form-wrapper").addClass("off-result")
  $(".search-form-wrapper").removeClass("form-active")
  $(".search-container").removeClass("mobile-active")
})