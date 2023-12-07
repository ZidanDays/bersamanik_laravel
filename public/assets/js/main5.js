document.addEventListener("DOMContentLoaded", function () {
  // Dapatkan URL halaman saat ini
  var currentUrl = window.location.href;

  // Dapatkan semua elemen link dalam navbar
  var navLinks = document.querySelectorAll(".navbar-nav .nav-link");

  // Hapus kelas 'active' dari semua link navbar
  navLinks.forEach(function (link) {
    link.classList.remove("active");
  });

  // Iterasi melalui setiap link dan tambahkan kelas 'active' jika URL-nya sesuai
  navLinks.forEach(function (link) {
    if (link.href === currentUrl) {
      link.classList.add("active");
    }
  });
});

const galleryItems = document.querySelectorAll(".gallery-item");
const popup = document.getElementById("popup");
const popupImage = document.getElementById("popup-image");
const popupVideo = document.getElementById("popup-video");
let currentIndex = 0;

galleryItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    currentIndex = index;
    showPopup();
  });
});

function showPopup() {
  const currentItem = galleryItems[currentIndex];

  if (currentItem.querySelector("img")) {
    popupImage.src = currentItem.querySelector("img").src;
    popupVideo.style.display = "none";
    popupImage.style.display = "block";
  } else if (currentItem.querySelector("video")) {
    popupVideo.src = currentItem.querySelector("video source").src;
    popupImage.style.display = "none";
    popupVideo.style.display = "block";
  }

  popup.style.display = "flex";
}

function closePopup() {
  popup.style.display = "none";
  popupImage.src = "";
  popupVideo.src = "";
}

function nextSlide() {
  currentIndex = (currentIndex + 1) % galleryItems.length;
  showPopup();
}

function prevSlide() {
  currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
  showPopup();
}

function showPopup() {
  const currentItem = galleryItems[currentIndex];

  if (currentItem.querySelector("img")) {
    popupImage.src = currentItem.querySelector("img").src;
    popupVideo.style.display = "none";
    popupImage.style.display = "block";
  } else if (currentItem.querySelector("video")) {
    popupVideo.src = currentItem.querySelector("video source").src;
    popupImage.style.display = "none";
    popupVideo.style.display = "block";
  }

  popup.style.display = "flex";
  document.body.classList.add("popup-active"); // Tambahkan class untuk menghilangkan scroll
}

function closePopup() {
  popup.style.display = "none";
  popupImage.src = "";
  popupVideo.src = "";
  document.body.classList.remove("popup-active"); // Hapus class untuk mengaktifkan scroll kembali
}

// var swiper = new Swiper("#testimonial-slider", {
//   slidesPerView: 3,
//   slidesPerGroup: 1,
//   loop: true,
//   grabCursor: false,
//   spaceBetween: 30,
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
//   autoplay: {
//     delay: 5000,
//     disableOnInteraction: false,
//   },
//   effect: "slide",
//   speed: 800,
// });

// // Menambahkan event listener untuk pagination
// var paginationBullets = document.querySelectorAll(".swiper-pagination-bullet");
// paginationBullets.forEach(function (bullet) {
//   bullet.addEventListener("click", function () {
//     swiper.autoplay.stop(); // Menghentikan autoplay saat pagination diklik
//   });
// });

// $(".btn-category").click(function () {
//   var category = $(this).data("category");

//   $(".galeri-container .col-md-4")
//     .removeClass("zoom-in")
//     .addClass("zoom-out")
//     .hide();

//   if (category === "all") {
//     $(".galeri-container .col-md-4").addClass("zoom-in").show();
//   } else {
//     $(".galeri-container ." + category)
//       .addClass("zoom-in")
//       .show();
//   }

//   $(".btn-category").removeClass("active");
//   $(this).addClass("active");
// });

$(document).ready(function () {
  $(".btn-category").click(function () {
    var category = $(this).data("category");

    $(".galeri-container .col-md-4").removeClass("zoom-in");

    setTimeout(function () {
      $(".galeri-container .col-md-4").hide();
      if (category === "all") {
        $(".galeri-container .col-md-4")
          .addClass("zoom-in")

          .show();
      } else {
        $(".galeri-container ." + category)
          .addClass("zoom-in")

          .show();
      }
    }, 300);

    $(".btn-category").removeClass("active");
    $(this).addClass("active");
  });
});
