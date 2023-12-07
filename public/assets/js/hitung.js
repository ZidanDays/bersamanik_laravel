// Tanggal target untuk countdown (1 Desember 2023, 00:00:00)
var targetDate = new Date("December 1, 2023 00:00:00").getTime();

// Memperbarui countdown setiap 1 detik
var countdownInterval = setInterval(function () {
  var currentDate = new Date().getTime();
  var timeDifference = targetDate - currentDate;

  var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
  var hours = Math.floor(
    (timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

  // Menampilkan countdown
  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("seconds").innerHTML = seconds;

  // Memeriksa jika countdown telah berakhir
  if (timeDifference < 0) {
    clearInterval(countdownInterval);
    document.getElementById("countdown").innerHTML = "Event telah dimulai!";
  }
}, 1000);
