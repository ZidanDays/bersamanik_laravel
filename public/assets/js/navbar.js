function toggleMenu() {
  var mobileMenu = document.querySelector(".mobile-menu");
  var overlay = document.querySelector(".mobile-menu-overlay");

  // Menggunakan classList.toggle untuk mengganti antara show dan hide
  mobileMenu.classList.toggle("show");
  overlay.classList.toggle("show");
}

function closeMenu() {
  var mobileMenu = document.querySelector(".mobile-menu");
  var overlay = document.querySelector(".mobile-menu-overlay");

  // Menghilangkan class "show" untuk menyembunyikan menu dan overlay
  mobileMenu.classList.remove("show");
  overlay.classList.remove("show");
}

window.onscroll = function () {
  scrollFunction();
};

var prevScrollpos = window.pageYOffset;

window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;

  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top =
      "-200px"; /* Adjust this value based on your navbar height */
  }

  if (currentScrollPos === 0) {
    document.getElementById("navbar").classList.remove("scrolled");
  } else {
    document.getElementById("navbar").classList.add("scrolled");
  }

  prevScrollpos = currentScrollPos;
};
