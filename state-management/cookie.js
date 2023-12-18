// Fungsi untuk menetapkan cookie
function setCookie(name, value, days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Fungsi untuk mendapatkan nilai cookie
function getCookie(name) {
  var nameEQ = name + "=";
  var cookies = document.cookie.split(";");
  for (var i = 0; i < cookies.length; i++) {
    var cookie = cookies[i];
    while (cookie.charAt(0) == " ") {
      cookie = cookie.substring(1, cookie.length);
    }
    if (cookie.indexOf(nameEQ) == 0) {
      return cookie.substring(nameEQ.length, cookie.length);
    }
  }
  return null;
}

// Fungsi untuk menghapus cookie
function eraseCookie(name) {
  document.cookie = name + "=; Max-Age=-99999999;";
}

// Fungsi untuk menyimpan informasi pengguna ke dalam browser storage
function setLocalStorage(username, email) {
  localStorage.setItem("username", username);
  localStorage.setItem("email", email);
}

// Fungsi untuk mendapatkan informasi pengguna dari browser storage
function getLocalStorage() {
  var username = localStorage.getItem("username");
  var email = localStorage.getItem("email");
  return { username: username, email: email };
}

// Fungsi untuk menghapus informasi pengguna dari browser storage
function clearLocalStorage() {
  localStorage.removeItem("username");
  localStorage.removeItem("email");
}

// Contoh penggunaan
setCookie("user_cookie", "john_doe", 7);
var userCookie = getCookie("user_cookie");
console.log("Cookie Value:", userCookie);

setLocalStorage("john_doe", "john@example.com");
var userInfoStorage = getLocalStorage();
console.log("Username:", userInfoStorage.username);
console.log("Email:", userInfoStorage.email);

// Hapus cookie
eraseCookie("user_cookie");

// Hapus informasi dari browser storage
clearLocalStorage();
