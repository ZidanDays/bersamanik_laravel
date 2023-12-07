// Daftar teks yang akan diketik
var typedTexts = ["Manik Marganamahendra"];
var currentTextIndex = 0;
var currentText = typedTexts[currentTextIndex];
var letterIndex = 0;

// Fungsi untuk menambahkan huruf satu per satu
function typeLetter() {
  var typedTextElement = document.getElementById("typed-text");

  // Jika belum semua huruf ditambahkan
  if (letterIndex < currentText.length) {
    typedTextElement.textContent += currentText.charAt(letterIndex);
    letterIndex++;
    setTimeout(typeLetter, 100); // Kecepatan mengetik (ms)
  } else {
    // Jika semua huruf telah ditambahkan, tunggu sebentar, lalu hapus huruf
    setTimeout(eraseLetter, 1000); // Waktu tunda sebelum menghapus (ms)
  }
}

// Fungsi untuk menghapus huruf satu per satu
function eraseLetter() {
  var typedTextElement = document.getElementById("typed-text");

  // Jika belum semua huruf dihapus
  if (letterIndex >= 0) {
    typedTextElement.textContent = currentText.substring(0, letterIndex);
    letterIndex--;
    setTimeout(eraseLetter, 50); // Kecepatan menghapus (ms)
  } else {
    // Jika semua huruf telah dihapus, lanjutkan ke teks berikutnya
    currentTextIndex = (currentTextIndex + 1) % typedTexts.length;
    currentText = typedTexts[currentTextIndex];
    setTimeout(typeLetter, 500); // Jeda sebelum mulai mengetik teks berikutnya (ms)
  }
}

// Memulai efek ketik pertama kali
setTimeout(typeLetter, 500); // Jeda sebelum memulai mengetik (ms)

// Daftar teks yang akan diketik
var typedTextsDua = ["Gagasan Besar"];
var currentTextIndexDua = 0;
var currentTextDua = typedTextsDua[currentTextIndexDua];
var letterIndexDua = 0;

// Fungsi untuk menambahkan huruf satu per satu
function typeLetterDua() {
  var typedTextElementDua = document.getElementById("typed-text-dua");

  // Jika belum semua huruf ditambahkan
  if (letterIndexDua < currentTextDua.length) {
    typedTextElementDua.textContent += currentTextDua.charAt(letterIndexDua);
    letterIndexDua++;
    setTimeout(typeLetterDua, 100); // Kecepatan mengetik (ms)
  } else {
    // Jika semua huruf telah ditambahkan, tunggu sebentar, lalu hapus huruf
    setTimeout(eraseLetterDua, 1000); // Waktu tunda sebelum menghapus (ms)
  }
}

// Fungsi untuk menghapus huruf satu per satu
function eraseLetterDua() {
  var typedTextElementDua = document.getElementById("typed-text-dua");

  // Jika belum semua huruf dihapus
  if (letterIndexDua >= 0) {
    typedTextElementDua.textContent = currentTextDua.substring(
      0,
      letterIndexDua
    );
    letterIndexDua--;
    setTimeout(eraseLetterDua, 50); // Kecepatan menghapus (ms)
  } else {
    // Jika semua huruf telah dihapus, lanjutkan ke teks berikutnya
    currentTextIndexDua = (currentTextIndexDua + 1) % typedTextsDua.length;
    currentTextDua = typedTextsDua[currentTextIndexDua];
    setTimeout(typeLetterDua, 500); // Jeda sebelum mulai mengetik teks berikutnya (ms)
  }
}

// Memulai efek ketik pertama kali
setTimeout(typeLetterDua, 500); // Jeda sebelum memulai mengetik (ms)
