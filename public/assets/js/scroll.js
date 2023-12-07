// Tambahkan skrip berikut untuk menangani fungsi kembali ke atas
$(document).ready(function () {
  // Menggunakan animasi smooth scroll saat tombol diklik
  $(".scroll-to-top-link").click(function (e) {
    e.preventDefault();
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      "300"
    );
  });

  // Menampilkan atau menyembunyikan tombol berdasarkan posisi scroll
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $(".scroll-to-top").fadeIn();
    } else {
      $(".scroll-to-top").fadeOut();
    }
  });
});
